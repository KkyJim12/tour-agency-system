<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SEO;

class AdminSEOController extends Controller
{
    public function AdminSaveSEO(Request $request)  {

      if (SEO::count() == 0) {
        $seo = new SEO;
        $seo->home_seo_title = $request->home_seo_title;
        $seo->home_seo_meta = $request->home_seo_meta;
        $seo->save();
      }

      else {
        $seo = SEO::first();
        $seo->home_seo_title = $request->home_seo_title;
        $seo->home_seo_meta = $request->home_seo_meta;
        $seo->save();
      }

      return redirect()->back();

    }
}
