<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamillePlat extends Model 
{
    protected $fillable = ['nom'];

    protected $table = 'famillesPlats';
    public $timestamps = true;




    public function PLatPrepare()
    {
        return $this->hasMany('PlatPrepare', 'id_famille');
    }

}