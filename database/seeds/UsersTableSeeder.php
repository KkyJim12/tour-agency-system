<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            // 'name' => 'Admin System',
            'user_email' => 'admin@test.com',
            'user_password' => 'Password@01',
        ]);
    }
}
