<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('components.navbar', function ($view) {
            $main_tel = Setting::where('tag', 'main_tel')->first();
            $main_line = Setting::where('tag', 'main_line')->first();
            $main_facebook = Setting::where('tag', 'main_facebook')->first();
            $view->with([
                'main_tel' => $main_tel,
                'main_line' => $main_line,
                'main_facebook' => $main_facebook
            ]);
        });

        View::composer('components.addline', function ($view) {
            $main_line = Setting::where('tag', 'main_line')->first();
            $image_line = Setting::where('tag', 'image_line')->first();
            $view->with([
                'main_line' => $main_line,
                'image_line' => $image_line
            ]);
        });
    }
}
