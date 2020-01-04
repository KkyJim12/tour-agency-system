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
        App\Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        App\Role::firstOrCreate([
            'name' => 'writer',
            'guard_name' => 'web'
        ]);

        App\Role::firstOrCreate([
            'name' => 'addtour',
            'guard_name' => 'web'
        ]);
    }
}
