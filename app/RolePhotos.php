<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePhotos extends Model
{
    protected $table = 'rolephoto';
    protected $fillable= ['nom','id'];

    public function photos()
    {
        return $this->hasMany(\App\Photo::class);
    }
}
