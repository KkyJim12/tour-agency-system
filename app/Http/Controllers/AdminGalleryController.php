<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Country;

class AdminGalleryController extends Controller
{
    public function AdminCreateGalleryProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'gallery_name' => 'required|max:255',
      'gallery_sort' => 'required',
      'country_id' => 'required',
      'gallery_img' => 'required|image|max:2048',
      ]);

      $gallery_country = Country::find($request->country_id);

      $gallery = new Gallery;
      $gallery->gallery_name = $request->gallery_name;
      $gallery->gallery_sort = $request->gallery_sort;
      $gallery->gallery_hide = $request->gallery_hide;
      $gallery->gallery_suggest = $request->gallery_suggest;
      $gallery->gallery_country_id = $gallery_country->_id;
      $gallery->gallery_country_name = $gallery_country->country_name;

      /* upload image */

      if ($request->hasFile('gallery_img')) {
        $image = $request->file('gallery_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/gallery/img');
        $image->move($destinationPath, $name);
        $gallery->gallery_img = $name;
      }

      /* upload multiple image */

      if ($request->hasFile('gallery_other_img')) {
        foreach($request->file('gallery_other_img') as $file)
            {
                $name = uniqid().'.'.$file->getClientOriginalName();
                $destinationPathOther = public_path('/assets/img/upload/gallery/otherimg');
                $file->move($destinationPathOther, $name);
                $data[] = $name;
            }
        $gallery->gallery_other_img = $data;
      }

      $gallery->save();

      return redirect()->route('admin-gallery');

    }

    public function AdminEditGalleryProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'gallery_name' => 'required|max:255',
      'gallery_sort' => 'required',
      'country_id' => 'required',
      'gallery_img' => 'image|max:2048',
      ]);

      $gallery_country = Country::find($request->country_id);

      $gallery = Gallery::find($request->gallery_id);
      $gallery->gallery_name = $request->gallery_name;
      $gallery->gallery_sort = $request->gallery_sort;
      $gallery->gallery_hide = $request->gallery_hide;
      $gallery->gallery_suggest = $request->gallery_suggest;
      $gallery->gallery_country_id = $gallery_country->_id;
      $gallery->gallery_country_name = $gallery_country->country_name;

      /* upload image */

      if ($request->hasFile('gallery_img')) {
        $image = $request->file('gallery_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/gallery/img');
        $image->move($destinationPath, $name);
        $gallery->gallery_img = $name;
      }

      /* upload multiple image */

      if ($request->hasFile('gallery_other_img')) {
        foreach($request->file('gallery_other_img') as $file)
            {
                $name = uniqid().'.'.$file->getClientOriginalName();
                $destinationPathOther = public_path('/assets/img/upload/gallery/otherimg');
                $file->move($destinationPathOther, $name);
                $data[] = $name;
            }
        $gallery->gallery_other_img = $data;
      }

      $gallery->save();

      return redirect()->route('admin-gallery');

    }

    public function AdminDeleteGalleryProcess(Request $request,$gallery_id) {
      $gallery = Gallery::find($request->gallery_id);
      $gallery->delete();

      return redirect()->route('admin-gallery');
    }
}
