<?php

namespace App;

use Moloquent;

class Holiday extends Moloquent
{
    protected $table = 'holiday';

    public function subholiday()
    {
        return $this->hasMany('App\Tour','tour_holiday_id','_id');
    }
}
