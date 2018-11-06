<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Continent;

class AdminContinentController extends Controller
{
    public function AdminCreateContinentProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'continent_name' => 'required|max:255',
      'continent_sort' => 'required',
      ]);

      /* End Validate */

      $continent = new Continent;
      $continent->continent_name = $request->continent_name;
      $continent->continent_sort = $request->continent_sort;
      $continent->continent_hide = $request->continent_hide;

      /* upload image */

      if ($request->hasFile('continent_img')) {
        $image = $request->file('continent_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/continent');
        $image->move($destinationPath, $name);
        $continent->continent_img = $name;
      }

      $continent->save();
      return redirect()->route('admin-continent');
    }

    /* Admin Edit Continent Process */

    public function AdminEditContinentProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'continent_name' => 'required|max:255',
      'continent_sort' => 'required',
      ]);

      /* End Validate */

      $continent = Continent::find($request->continent_id);
      $continent->continent_name = $request->continent_name;
      $continent->continent_sort = $request->continent_sort;
      $continent->continent_hide = $request->continent_hide;

      /* upload image */

      if ($request->hasFile('continent_img')) {

        /* delete old image */


        /* upload new image */

        $image = $request->file('continent_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/continent');
        $image->move($destinationPath, $name);
        $continent->continent_img = $name;
      }

      $continent->save();
      return redirect()->route('admin-continent');
    }

    /* Admin Delete Continent Process */

    public function AdminDeleteContinentProcess(Request $request) {
      $continent = Continent::find($request->continent_id);

      /* delete image */


      /* End delete image */

      $continent->delete();
      return redirect()->back();
    }
}
