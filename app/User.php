<?php

namespace App;

use Moloquent;
use Maklad\Permission\Traits\HasRoles;

class User extends Moloquent
{   

    use HasRoles;

    protected $guard_name = 'web';

    protected $table = 'users';
}
