<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Tour;

class UIViewController extends Controller
{
    public function ShowIndex() {
      $tour_suggest = Tour::where('tour_suggest','1')->get();
      return view('index',[
                            'tour_suggest' => $tour_suggest,
                          ]);
    }

    public function ShowCategory()  {
      return view('pages.category');
    }

    public function ShowAboutus() {
      return view('pages.aboutus');
    }

    public function ShowLogin() {

      if (session('user_log') == 1) {
        return redirect()->route('admin-dashboard');
      }

      else {
        return view('pages.member.login');
      }

    }

    public function ShowTour($tour_id)  {
      $country = Country::all();
      $tour = Tour::find($tour_id);
      return view('pages.tour',[
                                'country' => $country,
                                'tour' => $tour,
                               ]);
    }
}
