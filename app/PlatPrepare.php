<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlatPrepare extends Model 
{

    protected $table = 'platsPrepares';
    public $timestamps = true;
    protected $fillable = array('nom', 'prix', 'description','id_famille','id_uniteVente', 'publier');
    protected $visible = array('nom', 'prix', 'description', 'id_famille','id_uniteVente', 'publier');

    public function famillesPlats()
    {
        return $this->belongsTo('FamillePlat');
    }

    public function uniteVente()
    {
        return $this->belongsTo('UniteVente');
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