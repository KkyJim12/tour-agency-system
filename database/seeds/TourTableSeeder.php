<?php

use Illuminate\Database\Seeder;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Continent::firstOrCreate([
            'continent_name' => 'Asia',
            'continent_sort' => '1',
        ]);

        App\Country::firstOrCreate([
            'country_name' => 'Thailand',
            'country_sort' => '1',
            'country_img' => 'test',
            'continent_id' => App\Continent::first()->_id,
        ]);

        App\Branch::firstOrCreate([
            'branch_name' => 'Westgate',
            'branch_sort' => '1'
        ]);

        App\Staff::firstOrCreate([
            'staff_name' => 'Piyakarn Nimmakulvirut',
            'staff_nickname' => 'Jimmy',
            'staff_tel'=>'0658528414',
            'staff_email' => 'jirakarnjim1@gmail.com',
            'staff_facebook' => 'jirakarn123',
            'staff_line' => 'kkyjim14',
            'staff_branch_id' => App\Branch::first()->_id,
            'staff_branch_name' => App\Branch::first()->branch_name,
            'staff_sort' => '1',
            'staff_img' => 'test.jpg'
        ]);

        App\Airline::firstOrCreate([
            'airline_name' => 'Thai Air',
            'airline_sort' => '1',
            'airline_img' => 'test.jpg'
        ]);
    }
}
