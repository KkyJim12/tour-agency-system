<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Banner::create([
            'banner_num' => '1'
        ]);

        App\Banner::create([
            'banner_num' => '2'
        ]);

        App\Banner::create([
            'banner_num' => '3'
        ]);

        App\Banner::create([
            'banner_num' => '4'
        ]);

        App\Banner::create([
            'banner_num' => '5'
        ]);

        App\Banner::create([
            'banner_num' => '6'
        ]);
    }
}
