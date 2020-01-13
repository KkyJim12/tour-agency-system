<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::firstOrCreate([
            'content' => '02-595-0279',
            'tag' => 'main_tel'
        ]);

        App\Setting::firstOrCreate([
            'content' => '@royaltour',
            'tag' => 'main_line'
        ]);

        App\Setting::firstOrCreate([
            'content' => 'royaltourgroup',
            'tag' => 'main_facebook'
        ]);

        App\Setting::firstOrCreate([
            'content' => '/assets/img/search/banner.jpg',
            'tag' => 'background_search'
        ]);

        App\Setting::firstOrCreate([
            'content' => '/assets/img/article/banner.jpg',
            'tag' => 'background_tour'
        ]);

        App\Setting::firstOrCreate([
            'content' => '/assets/img/article/banner.jpg',
            'tag' => 'background_category'
        ]);

        App\Setting::firstOrCreate([
            'content' => '/assets/img/article/banner.jpg',
            'tag' => 'background_filter'
        ]);


        App\Setting::firstOrCreate([
            'content' => '/assets/img/article/banner.jpg',
            'tag' => 'background_article'
        ]);

        App\Setting::firstOrCreate([
            'content' => '/assets/img/gallery/banner.jpg',
            'tag' => 'background_gallery'
        ]);

        App\Setting::firstOrCreate([
            'content' => '/assets/img/components/addline.png',
            'tag' => 'image_line'
        ]);
    }
}
