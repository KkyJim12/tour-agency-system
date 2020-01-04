<?php

use Illuminate\Database\Seeder;

class OtherPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Aboutus::firstOrCreate([
            'content' => '',
        ]);

        App\Contact::firstOrCreate([
            'content' => '',
        ]);

        App\PaymentPage::firstOrCreate([
            'content' => '',
        ]);
    }
}
