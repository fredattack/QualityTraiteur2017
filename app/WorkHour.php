<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkHour extends Model 
{

    protected $table = 'WorkHours';
    protected $fillable = array('startTime', 'endTime');

    public $timestamps = true;

    public function days()
    {
        return $this->hasOne('App\Day', 'id');
    }

}