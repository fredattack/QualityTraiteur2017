<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable= ['nom','titre','role_id'];

    public function RolePhotos()
    {
        return $this->belongsTo(\App\RolePhotos::class);
    }
}
