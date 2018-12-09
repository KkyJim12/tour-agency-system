<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class AdminBannerController extends Controller
{

    /** Admin Banner Save **/
    public function AdminBannerSave(Request $request) {

      /* Validate First */

      $request->validate([
        'banner_img' => 'image|max:6000',
      ]);

      /* End Validate */

      $banner = Banner::where('banner_num',$request->banner_num)->first();

      /* upload image */

      if ($request->hasFile('banner_img')) {
        $image = $request->file('banner_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/banner');
        $image->move($destinationPath, $name);
        $banner->banner_img = $name;
      }

      $banner->banner_link = $request->banner_link;

      $banner->save();

      return redirect()->back();
    }
}
