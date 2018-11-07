<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class AdminSlideController extends Controller
{
    public function AdminCreateSlideProcess(Request $request) {
      $slide = new Slide;
      $slide->slide_link = $request->slide_link;
      $slide->slide_sort = $request->slide_sort;
      $slide->slide_hide = $request->slide_hide;

      /* Upload Image */

      if ($request->hasFile('slide_img')) {
        $image = $request->file('slide_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/slide');
        $image->move($destinationPath, $name);
        $slide->slide_img = $name;
      }

      $slide->save();

      return redirect()->route('admin-slide');
    }

    public function AdminEditSlideProcess(Request $request) {
      $slide = Slide::find($request->slide_id);
      $slide->slide_link = $request->slide_link;
      $slide->slide_sort = $request->slide_sort;
      $slide->slide_hide = $request->slide_hide;

      /* Upload Image */

      if ($request->hasFile('slide_img')) {
        $image = $request->file('slide_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/slide');
        $image->move($destinationPath, $name);
        $slide->slide_img = $name;
      }

      $slide->save();

      return redirect()->route('admin-slide');
    }

    public function AdminDeleteSlideProcess(Request $request) {
      $slide = Slide::find($request->slide_id);
      $slide->delete();

      return redirect()->route('admin-slide');
    }
}
