<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;


class SaladeController extends Controller
{

    public function index()
    {
        $salades = \App\salade::all();
        foreach ($salades as $salade  )
        {
            $id=$salade->id;
            $salade->composant= DB::table('ingredient_salade')
                                ->select('ingredients.nom')
                                ->join('ingredients', 'ingredient_salade.ingredient_id', '=','ingredients.id')
                                ->where('ingredient_salade.salade_id','=',$id)
                                ->get();

        }
        return view('Salade.index', compact('salades'));
    }



    public function create()
    {
        $listeDesIngredients = DB::table('ingredients')->get();
        return view('Salade.create',compact('listeDesIngredients'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required',
            'prix' => 'bail|required'

        ]);
        $salade = $request->only(['nom', 'prix']);

        //insert la nouvelle salade et récupération des infos (id)
        $lanouvelleSalade = \App\Salade::create($salade);

        //recuperer les id des ingrédients dans $request (tout sauf nom, prix et _token)
        $input = (array)$request->except(['nom', 'prix', '_token']);

        //ajouter les id des ingrédients dans la table pivot
        $lanouvelleSalade->ingredients()->sync($input);

        return redirect('admin/salade')->withOk("Le Salade " . $request->input('name') . " a été ajoutée.");

    }

    public function show($id)
    {
        $salade = \App\Salade::findOrFail($id);

        return view('Salade.show',  compact('salade'));
    }

    public function edit($id)
    {
        //recuperer les infos sur la salade choisie.
        $salade = \App\Salade::findOrFail($id);

        //lister tous les ingredients
        $ingredients = DB::table('ingredients')->get();

        //récuperer la liste des ingrédienst de la salade
        $salade->composant= DB::table('ingredient_salade')
            ->select('ingredients.nom')
            ->join('ingredients', 'ingredient_salade.ingredient_id', '=','ingredients.id')
            ->where('ingredient_salade.salade_id','=',$id)
            ->get();

        //Convertir l'objet $salade->composant en array pour pouvoir utiliser la methode PHP in_array
        //********************************************************************************************
            $composants = collect($salade->composant)->flatten();
            $listeComposant=array();
            foreach ($composants as $item)
                array_push ($listeComposant,$item->nom);
        //********************************************************************************************

        return view('Salade.edit',  compact(['salade','ingredients','listeComposant']));
    }

    public function update(Request $request, $id)
    {
        $salade = \App\Salade::findOrFail($id);

        $this->validate($request, [
            'nom' => 'required',
            'prix' => 'required',

        ]);

        $input = $request->all();
        //recuperer les id des ingrédients dans $request (tout sauf nom, prix et _token)
        $ingre = (array)$request->except(['nom', 'prix', '_token','_method']);

        //ajouter les id des ingrédients dans la table pivot
        $salade->ingredients()->sync($ingre);
        $salade->fill($input)->save();

//        return var_dump($input);
        return redirect('admin/salade')->withOk("Le Salade " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
//        return 'test123';
        $salade = \App\Salade::findOrFail($id);
//        return var_dump($salade);
        $salade->delete();
//
//
        return redirect()->route('admin.salade.index');
    }

}
