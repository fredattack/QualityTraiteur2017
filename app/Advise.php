<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advise extends Model 
{

    protected $table = 'advise';
    public $timestamps = true;
    protected $fillable = array('userName', 'userEmail', 'localite', 'message','note');

}