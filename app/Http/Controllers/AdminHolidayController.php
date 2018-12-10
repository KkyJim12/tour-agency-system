<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class AdminHolidayController extends Controller
{
    /* Create Holiday Process */
    public function AdminCreateHolidayProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'holiday_name' => 'required|max:255',
      'holiday_img' => 'required|max:2048|image',
      ]);

      $holiday = new Holiday;
      $holiday->holiday_name = $request->holiday_name;
      $holiday->holiday_sort = $request->holiday_sort;
      $holiday->holiday_hide = $request->holiday_hide;

      /* upload image */

      if ($request->hasFile('holiday_img')) {
        $image = $request->file('holiday_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/holiday');
        $image->move($destinationPath, $name);
        $holiday->holiday_img = $name;
      }

      $holiday->save();

      return redirect()->route('admin-holiday');
    }

    /* Edit Holiday Process */
    public function AdminEditHolidayProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'holiday_name' => 'required|max:255',
      'holiday_img' => 'max:2048|image',
      ]);

      $holiday = Holiday::find($request->holiday_id);
      $holiday->holiday_name = $request->holiday_name;
      $holiday->holiday_sort = $request->holiday_sort;
      $holiday->holiday_hide = $request->holiday_hide;

      /* upload image */

      if ($request->hasFile('holiday_img')) {
        $image = $request->file('holiday_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/holiday');
        $image->move($destinationPath, $name);
        $holiday->holiday_img = $name;
      }

      $holiday->save();

      return redirect()->route('admin-holiday');
    }

    /* Delete Holiday Process */
    public function AdminDeleteHolidayProcess(Request $request) {
      $holiday = Holiday::find($request->holiday_id);
      $holiday->delete();

      return redirect()->route('admin-holiday');
    }
}
