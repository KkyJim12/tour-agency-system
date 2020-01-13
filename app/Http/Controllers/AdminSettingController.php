<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class AdminSettingController extends Controller
{
    public function ShowSetting()
    {
        $main_tel = Setting::where('tag', 'main_tel')->first();
        $main_line = Setting::where('tag', 'main_line')->first();
        $main_facebook = Setting::where('tag', 'main_facebook')->first();
        return view('backend.backend-pages.setting.show', [
            'main_tel' => $main_tel,
            'main_line' => $main_line,
            'main_facebook' => $main_facebook
        ]);
    }

    public function EditSetting1(Request $request)
    {
        if ($request->main_tel) {
            $main_tel = Setting::where('tag', 'main_tel')->first();
            $main_tel->content = $request->main_tel;
            $main_tel->save();
        }

        if ($request->main_line) {
            $main_line = Setting::where('tag', 'main_line')->first();
            $main_line->content = $request->main_line;
            $main_line->save();
        }

        if ($request->main_facebook) {
            $main_facebook = Setting::where('tag', 'main_facebook')->first();
            $main_facebook->content = $request->main_facebook;
            $main_facebook->save();
        }

        return redirect()->back();
    }

    public function EditSetting2(Request $request)
    {
        if ($request->background_search) {

            $request->validate([
                'background_search' => 'required|image|max:2048',
            ]);

            $image = $request->file('background_search');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/setting/');
            $image->move($destinationPath, $name);
            $path = '/assets/img/upload/setting/';

            $background_search = Setting::where('tag', 'background_search')->first();
            $background_search->content = $path . $name;
            $background_search->save();
        }

        if ($request->background_tour) {

            $request->validate([
                'background_tour' => 'required|image|max:2048',
            ]);

            $image = $request->file('background_tour');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/setting/');
            $image->move($destinationPath, $name);
            $path = '/assets/img/upload/setting/';

            $background_tour = Setting::where('tag', 'background_tour')->first();
            $background_tour->content = $path . $name;
            $background_tour->save();
        }

        if ($request->background_article) {

            $request->validate([
                'background_article' => 'required|image|max:2048',
            ]);

            $image = $request->file('background_article');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/setting/');
            $image->move($destinationPath, $name);

            $background_article = Setting::where('tag', 'background_article')->first();
            $background_article->content =  $path . $name;
            $background_article->save();
        }

        if ($request->background_gallery) {

            $request->validate([
                'background_gallery' => 'required|image|max:2048',
            ]);

            $image = $request->file('background_gallery');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/setting/');
            $image->move($destinationPath, $name);

            $background_gallery = Setting::where('tag', 'background_gallery')->first();
            $background_gallery->content =  $path . $name;
            $background_gallery->save();
        }

        if ($request->image_line) {

            $request->validate([
                'image_line' => 'required|image|max:2048',
            ]);

            $image = $request->file('image_line');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/setting/');
            $image->move($destinationPath, $name);

            $image_line = Setting::where('tag', 'image_line')->first();
            $image_line->content =  $path . $name;
            $image_line->save();
        }

        return redirect()->back();
    }
}
