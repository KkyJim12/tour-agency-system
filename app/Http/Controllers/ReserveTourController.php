<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReserveTour;
use App\Tour;

class ReserveTourController extends Controller
{

    /** Reserve Tour Process **/
    public function ReserveTourProcess(Request $request) {

      /** Validate First **/
      $request->validate([
        'reserve_name' => 'required|max:100',
        'reserve_qty' => 'required',
        'reserve_tel' => 'required',
        'reserve_tour_id' => 'required',
        'reserve_tour_name' => 'required',
        'reserve_tour_start_date' => 'required',
        'reserve_tour_end_date' => 'required',
      ]);


      $reserve = new ReserveTour;
      $reserve->reserve_name = $request->reserve_name;
      $reserve->reserve_qty = $request->reserve_qty;
      $reserve->reserve_tel = $request->reserve_tel;
      $reserve->reserve_info = $request->reserve_info;
      $reserve->reserve_tour_id = $request->reserve_tour_id;
      $reserve->reserve_tour_name = $request->reserve_tour_name;
      $reserve->reserve_tour_start_date = $request->reserve_tour_start_date;
      $reserve->reserve_tour_end_date = $request->reserve_tour_end_date;
      $reserve->save();

      return redirect()->back()->with('success','จองสำเร็จ');
    }
}
