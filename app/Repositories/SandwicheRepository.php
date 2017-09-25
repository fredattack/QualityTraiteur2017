<?php

namespace App\Repositories;

use App\Sandwiche;

class SandwicheRepository extends ResourceRepository
{

    public function __construct(Sandwiche $sandwiche)
    {
        $this->model = $sandwiche;
    }

}