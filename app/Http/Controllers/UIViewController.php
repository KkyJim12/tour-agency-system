<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent;
use App\Country;
use App\Tour;

class UIViewController extends Controller
{
    public function ShowIndex() {
      $tour_suggest = Tour::where('tour_suggest','1')->get();
      $tour_discount = Tour::where('tour_discount','!=',null)->get();
      $continent = Continent::all();

      return view('index',[
                            'tour_suggest' => $tour_suggest,
                            'tour_discount' => $tour_discount,
                            'continent' => $continent,
                          ]);
    }

    public function ShowCategory($country_id)  {
      $continent = Continent::all();
      $country = Country::where('_id',$country_id)->first();
      $tour = Tour::where('tour_country_id',$country_id)->get();
      return view('pages.category',[
                                    'tour' => $tour,
                                    'country' => $country,
                                    'continent' => $continent,
                                   ]);
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
