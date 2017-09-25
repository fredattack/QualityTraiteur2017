<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buffet extends Model 
{

    protected $table = 'buffets';
    public $timestamps = true;
    protected $fillable = array('nom', 'prix','description');
    protected $visible = array('nom', 'prix','description');

}