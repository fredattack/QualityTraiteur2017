<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniteVente extends Model 
{
    protected $fillable = ['nom'];
    protected $table = 'unitesVente';
    public $timestamps = true;

    public function platsprepares()
    {
        return $this->hasMany('App\PlatPrepare','id_uniteVente');
    }


}