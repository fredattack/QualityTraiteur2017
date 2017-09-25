<?php

namespace App\Http\Controllers;

use App\RolePhotos;
use Illuminate\Http\Request;

use App\Http\Requests;

class RolePhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addSlide(Request $request)
    {
//        $test= $request['val'];
        $nbRole = \App\RolePhotos::where('groupe','=', '3' )->count();
        if($request['val']==1)
        {
        $nbRole++;
        $newRole= new \App\RolePhotos();
        $newRole['nom']='slide'.$nbRole;
        $newRole['groupe']=3;
        $newRole->save();

        return $newRole;
        }
        else
        {
           $id= \App\RolePhotos::where('groupe','=', '3' )->max('id');
            $leRole = \App\RolePhotos::findOrFail($id);
            $laPhoto=  \App\Photo::where('role_id','=', $id )->first();
            if( $laPhoto!=null){
                $laPhoto->role_id=1;
                $laPhoto->save();
                $leRole->delete();
            }
            else  $leRole->delete();

            return $id;
        }

    }

    public function addGallerie(Request $request)
    {
//        $test= $request['val'];
        $nbRole = \App\RolePhotos::where('groupe','=', '4' )->count();
        if($request['val']==1)
        {

            $nbRole++;
//
            $newRole= new \App\RolePhotos();
            $newRole['nom']='gallerie'.$nbRole;
            $newRole['groupe']=4;
            $newRole->save();

            return $newRole;
        }
        else
        {
            $id= \App\RolePhotos::where('groupe','=', '4' )->max('id');
            $leRole = \App\RolePhotos::findOrFail($id);
            $laPhoto=  \App\Photo::where('role_id','=', $id )->first();
            if( $laPhoto!=null){
                $laPhoto->role_id=1;
                $laPhoto->save();
                $leRole->delete();
            }
            else  $leRole->delete();

            return $id;
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nom' => 'required'

        ]);

        $input= $request->all();
        $newRole=\App\RolePhotos::create($input);

        return $newRole->id;
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
