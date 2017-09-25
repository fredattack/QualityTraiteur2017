<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use URL;
use DB;
use App\Quotation;
use App\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = \App\Photo::all();
        $roles= \App\RolePhotos::lists('nom', 'id');

        return view('Photo.index', compact(['photos','roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles= \App\RolePhotos::lists('nom', 'id');

        return view('photo.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'image' => 'required|max:2000'

        ]);

        $file = $request->file('image');
        $name = $request->file('image')->getClientOriginalName();
        $input = new Photo();
        $this->remplaceRoleAttribué($request);
        if(isset($file))
        {
        $destinationPath = 'image';
        $file->move($destinationPath,$name);
        $input->nom =$name;
        $input->role_id = $request->role_id;
        $input->titre = $request->titre;
        $input->save();
            app('App\Http\Controllers\GeneralController')->generateImage();
        return redirect('admin/photo')->with('message', 'la photo '.$input->titre.' a bien été ajoutée!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function publierRole(Request $request){
        $id = $request->input('id');
//        $idRole = $request->input('idRole');
        $laPhoto = \App\Photo::findOrFail($id);
        $laPhoto->role_id = $request->input('role');

        $laPhoto->save();
        return var_dump(gettype($id));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->remplaceRoleAttribué($request);
        /*
         * Je modifie ensuite l'image choisie au départ
         */
        //      récupérer la photo à modifier
        $photo = \App\Photo::findOrFail($id);
        //mise à jour du rôle
        $photo->Role_id = $request->role_id;
        //Sauvegarder les modifs dans la db.
        $photo->save();
        // je recupere le rolePhoto->nom pour affichage de confirmation
        $role=\App\RolePhotos::where('id',$photo->Role_id)->lists('nom')->first();

        // je controle si tous les rôles sont attribués
        $roleNonAttribues=$this->RoleManquant();
        app('App\Http\Controllers\GeneralController')->generateImage();
        if(empty($roleNonAttribues))//si oui, je valide et modifie la session "image"
        {
            return back();
            //return redirect('admin.photo')->with('message', 'la photo '.$photo->titre.' sera bien Affichée comme '. $role .' .');
        }
    else //si non, je retourne la liste des RolesPhoto non attribués.
        {
            $photos = \App\Photo::all();
            $roles= \App\RolePhotos::lists('nom', 'id');
            return back();
            //return view('Photo.index', compact(['photos','roles','roleNonAttribues']))->with('message', 'la photo '.$photo->titre.' sera bien Affichée comme '. $role .' .');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laPhoto = \App\Photo::findOrFail($id);
//        $nbRole = $this->RoleManquant();
        $laPhoto->delete();
//        return var_dump($nbRole);
        return redirect('admin/photo')->with('message', 'la photo  a bien été supprimée!');

    }

    public function RoleManquant()
    {
        $retVal= array();
        $nbRole=\App\RolePhotos::count();

        for($i=2;$i<=$nbRole;$i++)
        {
            $nbRoleAttribue=\App\photo::where('role_id',$i)->count();
            if($nbRoleAttribue==0)
            {
                array_push($retVal,$i);
            }

        }
            return $retVal;
    }

    /**
     * @param Request $request
     */
    public function remplaceRoleAttribué(Request $request)
    {
        if ($request->role_id != 1) // si le role choisi n'est pas "Aucun Rôle"
        {
            //On va rechercher la photo a remplacer
            $photoAChanger = \App\Photo::where('role_id', $request->role_id)->get();
            if ($photoAChanger != null) //Si il y en a, je leur retire leur rôle
            {
                foreach ($photoAChanger as $item) {
                    $item->Role_id = 1;
                    $item->save();
                }
            }
        }
        app('App\Http\Controllers\GeneralController')->generateImage();
    }


}
