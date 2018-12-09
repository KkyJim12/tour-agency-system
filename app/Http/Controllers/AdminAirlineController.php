<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airline;

class AdminAirlineController extends Controller
{

  /** Admin Create Airline Process **/
  public function  AdminCreateAirlineProcess(Request $request)  {

    /* Validate First */

    $request->validate([
    'airline_name' => 'required|max:255',
    'airline_sort' => 'required',
    'airline_img' => 'required|max:2048|image',
    ]);

    /* End Validate */

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


  /** Admin Edit Airline Process **/
  public function AdminEditAirlineProcess(Request $request) {

    /* Validate First */

    $request->validate([
    'airline_name' => 'required|max:255',
    'airline_sort' => 'required',
    'airline_img' => 'max:2048|image',
    ]);

    /* End Validate */

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


  /** Admin Delete Airline Process **/
  public function AdminDeleteAirlineProcess(Request $request) {
    $airline = Airline::find($request->airline_id);

    /* delete image */


    /* End delete image */

    $airline->delete();

    return redirect()->route('admin-airline');
  }
}
