<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = [
        'nom',
    ];

    public function salades()
    {
        return $this->belongsToMany('App\Salade','ingredient_salade','ingredient_id','salade_id');
    }

    public function sandwiches()
    {
        return $this->belongsToMany('App\Sandwiche','ingredient_sandwiche','ingredient_id','sandwiche_id');
    }


}
