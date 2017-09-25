<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Requests;
use Session;

class GeneralController extends Controller
{
    public function generateImage()
    {
       $listRole = \App\RolePhotos::all();
       $list = array();

        foreach ($listRole as $role)
        {
            $image=\App\Photo::where('role_id', $role->id)->get()->first();
            if($image!=null)
            {
                $name=$image->nom;
                session([$role->nom => $name]);
                $list[$role['nom']]=$name;
            }
            else
            {
                $name='QualityLogo.jpg';
                session([$role->nom => $name]);
                $list[$role['nom']]=$name;
            }
        }
//
//        $test ='hello World!!';
//        var_dump($test);

    }


}
