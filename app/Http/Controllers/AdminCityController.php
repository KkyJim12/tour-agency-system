<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use App\City;

class AdminCityController extends Controller
{
    /* Admin Create City Process*/
    public function AdminCreateCityProcess(Request $request)  {
      $country = Country::find($request->country_id);
      $city = new City;
      $city->city_name = $request->city_name;
      $city->city_sort = $request->city_sort;
      $city->country_id = $country->_id;
      $city->country_name = $country->country_name;
      $city->city_hide = $request->city_hide;

      /* upload image */

      if ($request->hasFile('city_img')) {
        $image = $request->file('city_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/city');
        $image->move($destinationPath, $name);
        $city->city_img = $name;
      }

      $city->save();

      return redirect()->route('admin-city');
    }

    /* Admin Edit City Process */
    public function AdminEditCityProcess(Request $request)  {
      $country = Country::find($request->country_id);
      $city = City::find($request->city_id);
      $city->city_name = $request->city_name;
      $city->city_sort = $request->city_sort;
      $city->country_id = $country->_id;
      $city->country_name = $country->country_name;
      $city->city_hide = $request->city_hide;

      /* upload image */

      if ($request->hasFile('city_img')) {
        $image = $request->file('city_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/city');
        $image->move($destinationPath, $name);
        $city->city_img = $name;
      }

      $city->save();

      return redirect()->route('admin-city');

    }

    /* Admin Delete City Process */
    public function AdminDeleteCityProcess(Request $request)  {
      $city = City::find($request->city_id);

      /* delete image */


      /* End delete image */

      $city->delete();
      return redirect()->back();
    }
}
