<?php

namespace App\Http\Controllers;

use App\Sandwiche;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class SandwicheController extends Controller
{
    public function index()
    {
        $sandwiches=$this->listesSandwichesEtComposants();
       $familleSandwiches =\App\Famillesandwiche::lists('nom', 'id');
       return view('sandwiche.index', compact(['sandwiches','familleSandwiches']));

    }

    public function frontIndex()
    {
        $compList= array();
        $sandwiches = \App\sandwiche::orderBy('nom')->get();
        foreach ($sandwiches as $sandwiche) {
            $id = $sandwiche->id;
            $sandwiche->composant = DB::table('ingredient_sandwiche')
                ->select('ingredients.nom')
                ->join('ingredients', 'ingredient_sandwiche.ingredient_id', '=', 'ingredients.id')
                ->where('ingredient_sandwiche.sandwiche_id', '=', $id)
                ->get();
            $compList[$id]= $sandwiche->composant;

        }
        $familleSandwiches =\App\Famillesandwiche::orderBy('id', 'desc')->get();
        $arr= array();
        $arr['lesSandwiches'] = $sandwiches;
        $arr['lesFamilles'] = $familleSandwiches;
        $arr['lesComposants'] = $compList;
//
        return response($arr);
//    return view('Sandwiche.front.index', compact(['sandwiches','familleSandwiches']));
    }

    public function create()
    {
        $listeDesIngredients = DB::table('ingredients')->orderBy('nom')->get();

        $familleSandwiches =\App\Famillesandwiche::orderBy('nom')->lists('nom', 'id');
        return view('sandwiche.create',compact(['listeDesIngredients','familleSandwiches' ]));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|unique:sandwiches|max:75',
            'prixTiers' => 'bail|required|numeric',
            'familleSandwiche_id' =>'bail|required',
            'prixDemi' => 'bail|required|numeric'
        ]);

        $input = $request->all();
        $input['prixTiers']=floatval($request->prixTiers);
        $input['prixDemi']=floatval($request->prixDemi);
        //insert la nouvelle sandwiche et récupération des infos (id)
        $leNouveauSandwiche = \App\Sandwiche::create($input);

        //recuperer les id des ingrédients dans $request (tout sauf nom, prix et _token)
        $ingredients = (array)$request->except(['nom', '_token','familleSandwiche_id','prixTiers','prixDemi']);

        //ajouter les id des ingrédients dans la table pivot
        $leNouveauSandwiche->ingredients()->sync($ingredients);

        return redirect('admin/sandwiche')->withOk("Le Sandwiche " . $request->input('name') . " a été modifié.");
    }

    public function show($id)
    {
        $sandwiche = \App\Sandwiche::findOrFail($id);

        return view('sandwiche.show',  compact('sandwiche'));
    }

    public function edit($id)
    {
        $familleSandwiches =\App\Famillesandwiche::lists('nom', 'id');
        $sandwiche = \App\Sandwiche::findOrFail($id);

        //lister tous les ingredients
        $listeDesIngredients = DB::table('ingredients')->orderBy('nom')->get();

        //récuperer la liste des ingrédients du sandwiche
        $sandwiche->composant= DB::table('ingredient_sandwiche')
            ->select('ingredients.nom')
            ->join('ingredients', 'ingredient_sandwiche.ingredient_id', '=','ingredients.id')
            ->where('ingredient_sandwiche.sandwiche_id','=',$id)
            ->get();

        //Convertir l'objet $sandwiche->composant en array pour pouvoir utiliser la methode PHP in_array
        //********************************************************************************************
        $composants = collect($sandwiche->composant)->flatten();
        $listeComposant=array();
        foreach ($composants as $item)
            array_push ($listeComposant,$item->nom);
        //********************************************************************************************

        return view('sandwiche.edit',  compact(['sandwiche','familleSandwiches','listeDesIngredients','listeComposant']));
    }

    public function update(Request $request, $id)
    {

        $sandwiche = \App\Sandwiche::findOrFail($id);

        $this->validate($request, [
            'nom' => 'bail|required|unique:sandwiches|max:75',
            'prixTiers' => 'bail|required|numeric',
            'familleSandwiche_id' =>'bail|required',
            'prixDemi' => 'bail|required|numeric'
        ]);

        $input = $request->all();
        //recuperer les id des ingrédients dans $request (tout sauf nom, prix et _token)
        $ingre = (array)$request->except(['nom','prixTiers','familleSandwiches' ,'prixDemi' ,'_token','_method']);

        //ajouter les id des ingrédients dans la table pivot
        $sandwiche->ingredients()->sync($ingre);
        $sandwiche->fill($input);
        $sandwiche->prixTiers=floatval($request->prixTiers);
        $sandwiche->prixDemi=floatval($request->prixDemi);
        $sandwiche->save();
//        return var_dump($sandwiche);


        return redirect('admin/sandwiche')->withOk("Le Sandwiche " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $sandwiche = \App\Sandwiche::findOrFail($id);

        $sandwiche->delete();

        return redirect()->route('admin.sandwiche.index');
    }

    /**
     * Récupérer les composants de chaques sandwiches pour l'affichage
     * @param $sandwiches
     */
    public function GetComposants($sandwiches)
    {
        foreach ($sandwiches as $sandwiche) {
            $id = $sandwiche->id;
            $sandwiche->composant = DB::table('ingredient_sandwiche')
                ->select('ingredients.nom')
                ->join('ingredients', 'ingredient_sandwiche.ingredient_id', '=', 'ingredients.id')
                ->where('ingredient_sandwiche.sandwiche_id', '=', $id)
                ->get();

        }
    }

    public function listesSandwichesEtComposants()
    {
        $sandwiches = \App\sandwiche::orderBy('familleSandwiche_id')->get();
        $this->GetComposants($sandwiches);
        return $sandwiches;

    }
}
