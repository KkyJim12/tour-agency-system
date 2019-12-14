<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Staff;
use App\Airline;
use App\Country;
use App\Holiday;
use Ajaxray\PHPWatermark\Watermark;

class AdminAddTourController extends Controller
{
    public function AdminAddTourCreate(Request $request)
    {

        /* Validate First */

        $request->validate([
            'tour_code' => 'required|max:255',
            'tour_name' => 'required|max:255',
            'tour_price_show' => 'required',
            'tour_staff' => 'required',
            'tour_country' => 'required',
            'tour_airline' => 'required',
            'tour_month' => 'required',
            'tour_month_last' => 'required',
            'tour_day' => 'required',
            'tour_night' => 'required',
        ]);

        /* End Validate */

        $staff = Staff::find($request->tour_staff);
        $country = Country::find($request->tour_country);
        $airline = Airline::find($request->tour_airline);
        $tour = new Tour;
        $tour->tour_code = $request->tour_code;
        $tour->tour_name = $request->tour_name;
        $tour->tour_price_show = (int) $request->tour_price_show;
        $tour->tour_discount = (int) $request->tour_discount;
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
        $tour->tour_month_last = $request->tour_month_last;
        $tour->tour_day = $request->tour_day;
        $tour->tour_night = $request->tour_night;
        $tour->tour_sort = $request->tour_sort;
        $tour->save();

        return redirect('/admin/admin-add-tour-step-1/' . $tour->_id);
    }

    public function AdminAddTourStep1($id)
    {
        $holiday = Holiday::all();
        $tour_id = $id;
        return view('backend.backend-pages.tour.add-step-1', [
            'holiday' => $holiday,
            'tour_id' => $tour_id
        ]);
    }

    public function AdminCreateTourStep1(Request $request, $id)
    {
        /* Validate First */

        $request->validate([
            'tour_hightlight' => 'required',
            'tour_condition' => 'required',
        ]);

        /* End Validate */

        $tour = Tour::find($id);
        $tour->tour_hightlight = $request->tour_hightlight;
        $tour->tour_condition = $request->tour_condition;
        $tour->tour_suggest = $request->tour_suggest;
        $tour->tour_hide = $request->tour_hide;
        if ($request->tour_holiday) {
            $holiday = Holiday::find($request->tour_holiday);
            $tour->tour_holiday_id = $holiday->_id;
            $tour->tour_holiday_name = $holiday->holiday_name;
        }

        $tour->save();

        return redirect('/admin/admin-add-tour-step-2/' . $tour->_id);
    }

    public function AdminAddTourStep2($id)
    {
        $tour_id = $id;
        return view('backend.backend-pages.tour.add-step-2', [
            'tour_id' => $tour_id
        ]);
    }

    public function AdminCreateTourStep2(Request $request, $id)
    {

        $tour = Tour::find($id);
        $tour->tour_start_date = $request->tour_start_date;
        $tour->tour_end_date = $request->tour_end_date;
        $tour->tour_price = $request->tour_price;
        $tour->save();

        return redirect('/admin/admin-add-tour-step-3/' . $tour->_id);
    }

    public function AdminAddTourStep3($id)
    {
        $tour_id = $id;
        return view('backend.backend-pages.tour.add-step-3', [
            'tour_id' => $tour_id
        ]);
    }

    public function AdminCreateTourStep3(Request $request, $id)
    {

        $tour = Tour::find($id);

        /* upload pdf */

        if ($request->hasFile('tour_pdf')) {
            $pdf = $request->file('tour_pdf');
            $name = time() . '.' . $pdf->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/tour/pdf/');
            $pdf->move($destinationPath, $name);
            $tour->tour_pdf = $name;

            // Add WaterMark
            $watermark = new Watermark($destinationPath . $name);
            // Watermark with text
            $watermark->setFont('Times-Bold');
            $watermark->setFontSize(25);
            $watermark->setPosition(Watermark::POSITION_TOP_RIGHT);
            $watermark->withText($tour->tour_code, $destinationPath . $name);
        }

        /* upload image */

        if ($request->hasFile('tour_img')) {
            $image = $request->file('tour_img');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/upload/tour/img');
            $image->move($destinationPath, $name);
            $tour->tour_img = $name;
        }

        /* upload multiple image */

        if ($request->hasFile('tour_other_img')) {
            foreach ($request->file('tour_other_img') as $file) {
                $name = uniqid() . '.' . $file->getClientOriginalName();
                $destinationPathOther = public_path('/assets/img/upload/tour/otherimg');
                $file->move($destinationPathOther, $name);
                $data[] = $name;
            }
            $tour->tour_other_img = $data;
        }

        $tour->save();

        return redirect('/admin/admin-add-tour-step-4/' . $tour->_id);
    }

    public function AdminAddTourStep4($id)
    {
        $tour_id = $id;
        return view('backend.backend-pages.tour.add-step-4', [
            'tour_id' => $tour_id
        ]);
    }

    public function AdminCreateTourStep4(Request $request, $id)
    {

        $tour = Tour::find($id);
        $tour->tour_seo_title = $request->tour_seo_title;
        $tour->tour_seo_meta = $request->tour_seo_meta;
        $tour->tour_seo_url = $request->tour_seo_url;
        $tour->save();

        return redirect('/admin/admin-tour');
    }
}
