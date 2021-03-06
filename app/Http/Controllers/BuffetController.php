<?php

namespace App\Http\Controllers;

use App\RolePhotos;
use DB;
use Illuminate\Http\Request;

class BuffetController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $listeBuffets = \App\Buffet::all();
        return view('Buffet.index', compact('listeBuffets'));
    }

    public function frontIndex()
    {
        $arr=[];
        $arr['buffet']= \App\Buffet::orderBy('prix', 'asc')->get();
        $arr['lesImages']=session()->all();

        return response($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Buffet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|unique:buffets|max:100',
            'prix' => 'bail|required|numeric',
            'description' => 'bail|required|max:1000',
        ]);

        $buffet = $request->except('image');
        //Isoler le nom du buffet pour créer le nom du nouveau RolePhoto
        $roleNom = $request->only('nom');
        $nomDuRole= $roleNom['nom'];
        $titreImage = $nomDuRole." Image";
        $nomDuRole = preg_replace('/\s+/', '', $titreImage);
        //Convertir le nom en request pour l'utiliser dans RolePhotosController@Store
        $temp = new Request();
        $temp['nom']= $nomDuRole;
        //creer le nouveau rôle et récupérer l'id
        $role_id= app('App\Http\Controllers\RolePhotosController')->store($temp);

        $leNouveauBuffet = \App\Buffet::create($buffet);

//        return var_dump($nomDuRole);
        return redirect('admin/buffet')->with('message',"Le Buffet " . $leNouveauBuffet->nom . " a été ajouté.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $buffet = \App\Buffet::findOrFail($id);
        return view('Buffet.show',compact('buffet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $leBuffet = \App\Buffet::findOrFail($id);
        return view('Buffet.edit',compact('leBuffet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id,Request $request)
    {

        $this->validate($request, [
            'nom' => 'bail|required|max:100',
            'prix' => 'bail|required|numeric',
            'description' => 'bail|required|max:1000',
        ]);

        $buffet = \App\Buffet::findOrFail($id);
        $input=$request->all();
        $buffet->fill($input)->save();

        return redirect('admin/buffet')->with('message',"Le buffet " . $buffet->nom . " a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $buffet=\App\Buffet::findOrFail($id);
        $roleNom = $buffet->nom;
        $titreImage = $roleNom." Image";
        $nomDuRole = preg_replace('/\s+/', '', $titreImage);
        \App\RolePhotos::where('nom','=', $nomDuRole )->delete();
        $buffet->delete();
        return redirect()->route('admin.buffet.index');
    }

}

?>