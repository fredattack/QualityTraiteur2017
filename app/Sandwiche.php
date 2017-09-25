<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sandwiche extends Model
{
    public  $composant;
    protected $table = 'sandwiches';
    public $timestamps = true;
    protected $fillable = [
        'nom',
        'prixTiers',
        'prixDemi',
        'familleSandwiche_id'
    ];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient','ingredient_sandwiche',
            'sandwiche_id','ingredient_id');
    }

    public function familleSandwiches ()
    {
        return $this->belongsTo(\App\FamilleSandwiche::class);
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
