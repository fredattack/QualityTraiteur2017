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
       return view('Sandwiche.index', compact(['sandwiches','familleSandwiches']));

    }

    public function frontIndex()
    {
        $compList= array();
        $sandwiches = \App\Sandwiche::orderBy('familleSandwiche_id')->get();
        foreach ($sandwiches as $sandwiche) {
            $id = $sandwiche->id;
            $sandwiche->composant = DB::table('ingredient_sandwiche')
                ->select('ingredients.nom')
                ->join('ingredients', 'ingredient_sandwiche.ingredient_id', '=', 'ingredients.id')
                ->where('ingredient_sandwiche.sandwiche_id', '=', $id)
                ->get();
            $compList[$id]= $sandwiche->composant;

        }
        $familleSandwiches =\App\Famillesandwiche::orderBy('id', 'asc')->get();
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
        return view('Sandwiche.create',compact(['listeDesIngredients','familleSandwiches' ]));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|max:75',
            'prixTiers' => 'bail|required|numeric',
            'familleSandwiches' =>'bail|required',
            'prixDemi' => 'bail|required|numeric'
        ]);

        $input = $request->all();
        $input['prixTiers']=floatval($request->prixTiers);
        $input['prixDemi']=floatval($request->prixDemi);
        //insert la nouvelle sandwiche et récupération des infos (id)
        $leNouveauSandwiche = \App\Sandwiche::create($input);

        //recuperer les id des ingrédients dans $request (tout sauf nom, prix et _token)
        $ingredients = (array)$request->except(['nom', '_token','familleSandwiches','prixTiers','prixDemi']);

        //ajouter les id des ingrédients dans la table pivot
        $leNouveauSandwiche->ingredients()->sync($ingredients);

        return redirect('admin/sandwiche')->withOk("Le Sandwiche " . $request->input('name') . " a été modifié.");
    }

    public function show($id)
    {
        $sandwiche = \App\Sandwiche::findOrFail($id);

        return view('Sandwiche.show',  compact('sandwiche'));
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

        return view('Sandwiche.edit',  compact(['sandwiche','familleSandwiches','listeDesIngredients','listeComposant']));
    }

    public function update(Request $request, $id)
    {

        $sandwiche = \App\Sandwiche::findOrFail($id);
        $this->validate($request, [
            'nom' => 'bail|required|max:75',
            'prixTiers' => 'bail|required|numeric',
            'familleSandwiches' =>'bail|required',
            'prixDemi' => 'bail|required|numeric'
        ]);

        $input = $request->all();

        //recuperer les id des ingrédients dans $request (tout sauf nom, prix et _token)
        $ingre = (array)$request->except(['nom','prixTiers','familleSandwiches' ,'prixDemi' ,'_token','_method']);

        //ajouter les id des ingrédients dans la table pivot
        $sandwiche->ingredients()->sync($ingre);
        $sandwiche->fill($input);
        $sandwiche->familleSandwiche_id = $request->familleSandwiches;
        $sandwiche->prixTiers=floatval($request->prixTiers);
        $sandwiche->prixDemi=floatval($request->prixDemi);
//        dd($sandwiche);
        $sandwiche->save();

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
        $sandwiches = \App\Sandwiche::all();
        $this->GetComposants($sandwiches);
        return $sandwiches;

    }
}
