<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;
use App\Staff;
use App\Country;
use App\Airline;
use App\Holiday;

class AdminTourController extends Controller
{

    /** Admin Create Tour Process **/
    public function AdminCreateTourProcess(Request $request)
    {
        /* Validate First */

        $request->validate([
      'tour_staff' => 'required',
      'tour_country' => 'required',
      'tour_airline' => 'required',
      'tour_code' => 'required|max:255',
      'tour_name' => 'required|max:255',
      'tour_price' => 'required',
      'tour_month' => 'required',
      'tour_start_date' => 'required',
      'tour_end_date' => 'required',
      'tour_expire_date' => 'required',
      'tour_day' => 'required',
      'tour_night' => 'required',
      'tour_hightlight' => 'required',
      'tour_condition' => 'required',
      'tour_sort' => 'required',
      'tour_img' => 'required|image|max:2048',
      'tour_other_img' => 'required',
      'tour_pdf' => 'nullable|mimes:pdf|max:10000'
      ]);



        /* End Validate */

        $staff = Staff::find($request->tour_staff);
        $country = Country::find($request->tour_country);
        $airline = Airline::find($request->tour_airline);
        $tour = new Tour;
        $tour->tour_code = $request->tour_code;
        $tour->tour_name = $request->tour_name;
        $tour->tour_price = array_map('intval',$request->tour_price);
        $tour->tour_discount = (integer)$request->tour_discount;
        $tour->tour_staff_id = $staff->_id;
        $tour->tour_staff_name = $staff->staff_name;
        $tour->tour_staff_tel = $staff->staff_tel;
        $tour->tour_staff_line = $staff->staff_line;
        $tour->tour_staff_email = $staff->staff_email;
        $tour->tour_country_id = $country->_id;
        $tour->tour_country_name = $country->country_name;
        $tour->tour_airline_id = $airline->_id;
        $tour->tour_airline_name = $airline->airline_name;
        $tour->tour_airline_img = $airline->airline_img;
        $tour->tour_month = $request->tour_month;
        $tour->tour_start_date = $request->tour_start_date;
        $tour->tour_end_date = $request->tour_end_date;
        $tour->tour_expire_date = $request->tour_expire_date;
        $tour->tour_day = $request->tour_day;
        $tour->tour_night = $request->tour_night;
        $tour->tour_hightlight = $request->tour_hightlight;
        $tour->tour_condition = $request->tour_condition;
        $tour->tour_sort = $request->tour_sort;
        $tour->tour_suggest = $request->tour_suggest;
        $tour->tour_hide = $request->tour_hide;
        $tour->tour_seo_title = $request->tour_seo_title;
        $tour->tour_seo_meta = $request->tour_seo_meta;
        $tour->tour_seo_url = $request->tour_seo_url;
        if ($request->tour_holiday) {
            $holiday = Holiday::find($request->tour_holiday);
            $tour->tour_holiday_id = $holiday->_id;
            $tour->tour_holiday_name = $holiday->holiday_name;
        }

        /* upload pdf */

        if ($request->hasFile('tour_pdf')) {
            $pdf = $request->file('tour_pdf');
            $name = uniqid().'.'.$pdf->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/tour/pdf');
            $pdf->move($destinationPath, $name);
            $tour->tour_pdf = $name;
        }

        /* upload image */

        if ($request->hasFile('tour_img')) {
            $image = $request->file('tour_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/tour/img');
            $image->move($destinationPath, $name);
            $tour->tour_img = $name;
        }

        /* upload multiple image */

        if ($request->hasFile('tour_other_img')) {
            foreach ($request->file('tour_other_img') as $file) {
                $name = uniqid().'.'.$file->getClientOriginalName();
                $destinationPathOther = public_path('/assets/img/upload/tour/otherimg');
                $file->move($destinationPathOther, $name);
                $data[] = $name;
            }

            $tour->tour_other_img = $data;
        }

        $tour->save();

        return redirect()->route('admin-tour');
    }


    /** Admin Edit Tour Process **/
    public function AdminEditTourProcess(Request $request)
    {

      /* Validate First */

        $request->validate([
      'tour_staff' => 'required',
      'tour_country' => 'required',
      'tour_airline' => 'required',
      'tour_code' => 'required|max:255',
      'tour_name' => 'required|max:255',
      'tour_price' => 'required',
      'tour_month' => 'required',
      'tour_start_date' => 'required',
      'tour_end_date' => 'required',
      'tour_expire_date' => 'required',
      'tour_day' => 'required',
      'tour_night' => 'required',
      'tour_hightlight' => 'required',
      'tour_condition' => 'required',
      'tour_sort' => 'required',
      'tour_img' => 'image|max:2048',
      'tour_pdf' => 'nullable|mimes:pdf|max:10000'
      ]);

        /* End Validate */

        $staff = Staff::find($request->tour_staff);
        $country = Country::find($request->tour_country);
        $airline = Airline::find($request->tour_airline);
        $tour = Tour::find($request->tour_id);
        $tour->tour_code = $request->tour_code;
        $tour->tour_name = $request->tour_name;
        $tour->tour_price = array_map('intval',$request->tour_price);
        $tour->tour_discount = (integer)$request->tour_discount;
        $tour->tour_staff_id = $staff->_id;
        $tour->tour_staff_name = $staff->staff_name;
        $tour->tour_staff_tel = $staff->staff_tel;
        $tour->tour_staff_line = $staff->staff_line;
        $tour->tour_staff_email = $staff->staff_email;
        $tour->tour_country_id = $country->_id;
        $tour->tour_country_name = $country->country_name;
        $tour->tour_airline_id = $airline->_id;
        $tour->tour_airline_name = $airline->airline_name;
        $tour->tour_airline_img = $airline->airline_img;
        $tour->tour_month = $request->tour_month;
        $tour->tour_start_date = $request->tour_start_date;
        $tour->tour_end_date = $request->tour_end_date;
        $tour->tour_expire_date = $request->tour_expire_date;
        $tour->tour_day = $request->tour_day;
        $tour->tour_night = $request->tour_night;
        $tour->tour_hightlight = $request->tour_hightlight;
        $tour->tour_condition = $request->tour_condition;
        $tour->tour_sort = $request->tour_sort;
        $tour->tour_suggest = $request->tour_suggest;
        $tour->tour_hide = $request->tour_hide;
        $tour->tour_seo_title = $request->tour_seo_title;
        $tour->tour_seo_meta = $request->tour_seo_meta;
        $tour->tour_seo_url = $request->tour_seo_url;
        if ($request->tour_holiday) {
            $holiday = Holiday::find($request->tour_holiday);
            $tour->tour_holiday_id = $holiday->_id;
            $tour->tour_holiday_name = $holiday->holiday_name;
        }

        /* upload pdf */

        if ($request->hasFile('tour_pdf')) {
            $pdf = $request->file('tour_pdf');
            $name = uniqid().'.'.$pdf->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/tour/pdf');
            $pdf->move($destinationPath, $name);
            $tour->tour_pdf = $name;
        }

        /* upload image */

        if ($request->hasFile('tour_img')) {
            $image = $request->file('tour_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/tour/img');
            $image->move($destinationPath, $name);
            $tour->tour_img = $name;
        }

        /* upload multiple image */

        if ($request->hasFile('tour_other_img')) {
            foreach ($request->file('tour_other_img') as $file) {
                $name = uniqid().'.'.$file->getClientOriginalName();
                $destinationPathOther = public_path('/assets/img/upload/tour/otherimg');
                $file->move($destinationPathOther, $name);
                $data[] = $name;
            }
            $tour->tour_other_img = $data;
        }

        $tour->save();

        return redirect()->route('admin-tour');
    }


    /** Admin Delete Tour Process **/
    public function AdminDeleteTourProcess(Request $request)
    {
        $tour = Tour::find($request->tour_id);
        $tour->delete();
        return redirect()->route('admin-tour');
    }
}
