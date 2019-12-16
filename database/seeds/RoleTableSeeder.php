<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        App\Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        App\Role::create([
            'name' => 'writer',
            'guard_name' => 'web'
        ]);

        App\Role::create([
            'name' => 'addtour',
            'guard_name' => 'web'
        ]);
    }
}
