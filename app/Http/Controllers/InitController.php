<?php

namespace App\Http\Controllers;
use Session;
use URL;
use Illuminate\Http\Request;

use App\Http\Requests;

class initController extends Controller
{
    public function index()
    {
        app('App\Http\Controllers\GeneralController')->generateImage();

        return view('front/welcome');
    }

    public function indexBackEnd()
    {
        return view('back.adminHome');
    }
}
