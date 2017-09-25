<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salade extends Model
{
    public  $composant;
    protected $table = 'salades';


    protected $fillable = [
        'nom',
        'prix'
    ];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient','ingredient_salade',
            'salade_id','ingredient_id');
    }

    public function getcomposantAttribute()
    {

        return $this->composant;
    }
    public function setcomposantAttribute($value)
    {
        $this->composant = $value;
    }

}
