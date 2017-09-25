<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model 
{

    protected $table = 'days';
    public $timestamps = true;

    public function WorkHours()
    {
        return $this->belongsToMany('WorkHour', 'day_id');
    }

}