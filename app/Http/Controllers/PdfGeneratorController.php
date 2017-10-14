<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use DB;

class PdfGeneratorController extends Controller
{
//
//    * Show the application dashboard.
//    *
//    * @return \Illuminate\Http\Response

    public function pdfSandwich(Request $request)
    {
        $data['sandwiche'] = \App\Sandwiche::orderBy('id')->get();
        $sandwiches=$data['sandwiche'];
        $data['famille'] =    \App\Famillesandwiche::orderBy('id', 'asc')->get();
         foreach ($sandwiches as $sandwiche) {
             $id = $sandwiche->id;
             $sandwiche->composant = DB::table('ingredient_sandwiche')
                 ->select('ingredients.nom')
                 ->join('ingredients', 'ingredient_sandwiche.ingredient_id', '=', 'ingredients.id')
                 ->where('ingredient_sandwiche.sandwiche_id', '=', $id)
                 ->get();
             $compList[$id] = $sandwiche->composant;
         }
        $data['lesComposants']=$compList;

            view()->share('data', $data);

        if ($request->has('download')) {
            $pdf = PDF::loadView('pdf.pdfSandwich');
            return $pdf->download('sandwichsQualityTraiteur.pdf');
        }
//        var_dump($request);

        return view('pdf.pdfSandwich');
    }
}
