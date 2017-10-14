<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests;
use DB;;

class PlatPrepareController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $listePlatPrepares=$this->listesPlatPrepares();
      $listeFamillePlat =\App\FamillePlat::lists('nom', 'id');
      $listeUniteVente =\App\UniteVente::lists('nom','id');
      return view('PlatPrepare.index', compact(['listePlatPrepares','listeFamillePlat','listeUniteVente']));
  }

    public function frontIndex()
    {
        $arr= array();
        $arr['lesPlats']=\App\PlatPrepare::where('publier','=','1')->orderBy('id_famille')->orderBy('nom')->get();
        $arr['lesFamilles']=\App\FamillePlat::orderBy('id')->get();
        $arr['lesUnitesDeVente']=\App\UniteVente::orderBy('id')->get();

        return response($arr);
    }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $listeUnitesVente =\App\UniteVente::orderBy('nom')->lists('nom', 'id');

      $listeFamillePlat =\App\FamillePlat::orderBy('nom')->lists('nom', 'id');
      return view('PlatPrepare.create',compact(['listeUnitesVente','listeFamillePlat' ]));
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $this->validate($request, [
          'nom' => 'bail|required|unique:platsPrepares|max:100',
          'prix' => 'bail|required|numeric',
          'description'=>'bail|max:145',
          'id_famille'=>'required',
          'id_uniteVente' => 'required'
      ]);

      $Plat = $request->all();

//      return var_dump($Plat);

      //insert le nouveau plat
      \App\PlatPrepare::create($Plat);

      return redirect('admin/platprepare')->withOk("Le Plat " . $request->input('name') . " a été modifié.");

  }
    


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      $lePlat = \App\PlatPrepare::findOrFail($id);

      $listeUnitesVente=\App\UniteVente::orderBy('nom')->lists('nom', 'id');

      $listeFamillePlat =\App\FamillePlat::orderBy('nom')->lists('nom', 'id');

      return view('PlatPrepare.show',  compact(['lePlat','listeUnitesVente','listeFamillePlat']));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      //recuperer les infos sur la salade choisie.
      $lePlat = \App\PlatPrepare::findOrFail($id);

      $listeUnitesVente=\App\UniteVente::orderBy('nom')->lists('nom', 'id');

      $listeFamillePlat =\App\FamillePlat::orderBy('nom')->lists('nom', 'id');

      return view('PlatPrepare.edit',  compact(['lePlat','listeUnitesVente','listeFamillePlat']));
  }

  public function publierPlat(Request $request)
  {
      $id = $request->input('id');
      $lePlat = \App\PlatPrepare::findOrFail($id);
//
      if($lePlat->publier==1)
      {
          $lePlat->publier=0;
      }
      else
      {
          $lePlat->publier=1;
      }
      $lePlat->save();
//      return var_dump($lePlat);
      return $id;
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
      $lePlat = \App\PlatPrepare::findOrFail($id);

      $this->validate($request, [
          'nom' => 'bail|required|max:100',
          'prix' => 'bail|required|numeric',

          'description'=>'bail|max:145',
          'id_famille'=>'required',
          'id_uniteVente' => 'required'
      ]);

      $input = $request->all();

      $lePlat->fill($input)->save();

      return redirect('admin/platprepare')->withOk("Le Plat " . $request->input('name') . " a été modifié.");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $lePLat = \App\PlatPrepare::findOrFail($id);

      $lePLat->delete();


      return redirect()->route('admin.platprepare.index');
  }


    /**
     * @return mixed
     */
    public function listesPlatPrepares()
    {
        $platPrepares = \App\PlatPrepare::orderBy('id_famille')->orderBy('nom')->get();
        return $platPrepares;
    }
  
}

?>