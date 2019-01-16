<?php

namespace App;

use Moloquent;

class Continent extends Moloquent
{
    protected $table = 'continent';

    public function subcat()
    {
        return $this->hasMany('App\Country');
    }
}
