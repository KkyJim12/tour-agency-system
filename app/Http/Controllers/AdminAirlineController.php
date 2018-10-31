<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airline;

class AdminAirlineController extends Controller
{
  public function  AdminCreateAirlineProcess(Request $request)  {
    $airline = new Airline;
    $airline->airline_name = $request->airline_name;
    $airline->airline_sort = $request->airline_sort;
    $airline->airline_hide = $request->airline_hide;

    /* upload image */

    if ($request->hasFile('airline_img')) {
      $image = $request->file('airline_img');
      $name = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/assets/img/upload/airline');
      $image->move($destinationPath, $name);
      $airline->airline_img = $name;
    }

    $airline->save();

    return redirect()->route('admin-airline');
  }

  public function AdminEditAirlineProcess(Request $request) {
    $airline = Airline::find($request->airline_id);
    $airline->airline_name = $request->airline_name;
    $airline->airline_sort = $request->airline_sort;
    $airline->airline_hide = $request->airline_hide;

    /* upload image */

    if ($request->hasFile('airline_img')) {
      $image = $request->file('airline_img');
      $name = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/assets/img/upload/airline');
      $image->move($destinationPath, $name);
      $airline->airline_img = $name;
    }

    $airline->save();

    return redirect()->route('admin-airline');
  }

  public function AdminDeleteAirlineProcess(Request $request) {
    $airline = Airline::find($request->airline_id);

    /* delete image */


    /* End delete image */

    $airline->delete();

    return redirect()->route('admin-airline');
  }
}
