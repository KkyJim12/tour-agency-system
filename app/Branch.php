<?php

namespace App;

use Moloquent;

class Branch extends Moloquent
{
    protected $table = 'branch';

    public function subcon()
    {
        return $this->hasMany('App\Staff','staff_branch_id','_id');
    }
}
