<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familleSandwiche extends Model
{
    public function sandwiches()
    {
        $this->hasOne(\App\Sandwiche::class);
    }
}
