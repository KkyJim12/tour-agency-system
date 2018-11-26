<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent;
use App\Country;
use App\Tour;
use App\PaymentPage;
use App\Airline;
use App\Banner;
use App\Slide;
use App\Aboutus;
use App\Contact;

class UIViewController extends Controller
{
    public function ShowIndex() {
      $tour_suggest = Tour::where('tour_suggest','1')->get();
      $tour_discount = Tour::where('tour_discount','!=',0)->get();
      $continent = Continent::all();
      $nav_banner = Banner::where('banner_num','1')->first();
      $second_banner = Banner::where('banner_num','2')->first();
      $third_banner = Banner::where('banner_num','3')->first();
      $fourth_banner = Banner::where('banner_num','4')->first();
      $fifth_banner = Banner::where('banner_num','5')->first();
      $sixth_banner = Banner::where('banner_num','6')->first();
      $first_slide = Slide::first();
      if ($first_slide !== null) {
        $slide = Slide::where('_id','!=',$first_slide->_id)->get();
      }
      else {
        $slide = null;
      }
      return view('index',[
                            'tour_suggest' => $tour_suggest,
                            'tour_discount' => $tour_discount,
                            'continent' => $continent,
                            'nav_banner' => $nav_banner,
                            'second_banner' => $second_banner,
                            'third_banner' => $third_banner,
                            'fourth_banner' => $fourth_banner,
                            'fifth_banner' => $fifth_banner,
                            'sixth_banner' => $sixth_banner,
                            'slide' => $slide,
                            'first_slide' => $first_slide,
                          ]);
    }

    public function ShowCategory($country_id)  {
      $filter_country = Country::all();
      $continent = Continent::all();
      $airline = Airline::all();
      $country = Country::where('_id',$country_id)->first();
      $tour = Tour::where('tour_country_id',$country_id)->get();
      $nav_banner = Banner::where('banner_num','1')->first();
      return view('pages.category',[
                                    'tour' => $tour,
                                    'country' => $country,
                                    'continent' => $continent,
                                    'airline' => $airline,
                                    'nav_banner' => $nav_banner,
                                    'filter_country' => $filter_country,
                                   ]);
    }

    public function ShowHowToPay()  {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $content = PaymentPage::first();
      return view('pages.other.how-to-pay',[
                                            'nav_banner' => $nav_banner,
                                            'continent' => $continent,
                                            'content' => $content,
                                           ]);
    }

    public function ShowContactus() {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $content = Contact::first();
      return view('pages.other.how-to-pay',[
                                            'nav_banner' => $nav_banner,
                                            'continent' => $continent,
                                            'content' => $content,
                                           ]);
    }

    public function ShowAboutus() {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $content = Aboutus::first();
      return view('pages.other.aboutus',[
                                    'continent' => $continent,
                                    'nav_banner' => $nav_banner,
                                    'content' => $content,
                                  ]);
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
      $nav_banner = Banner::where('banner_num','1')->first();
      $country = Country::all();
      $tour = Tour::find($tour_id);
      $continent = Continent::all();
      return view('pages.tour',[
                                'nav_banner' => $nav_banner,
                                'country' => $country,
                                'tour' => $tour,
                                'continent' => $continent,
                               ]);
    }

    public function ShowSearchResult(Request $request)  {
      $filter_country = Country::all();
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $airline = Airline::all();
      $search_word = $request->search_name;

      if ($request->search_name && $request->search_tour_code && $request->search_tour_month) {
        $tour_result = Tour::where('tour_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_country_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_city_name','LIKE','%'.$request->search_name.'%')
                            ->where('tour_code','LIKE','%'.$request->search_tour_code.'%')
                            ->where('tour_month',$request->search_tour_month)
                            ->get();
      }

      elseif($request->search_name && $request->search_tour_code) {
        $tour_result = Tour::where('tour_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_country_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_city_name','LIKE','%'.$request->search_name.'%')
                            ->where('tour_code','LIKE','%'.$request->search_tour_code.'%')
                            ->get();
      }

      elseif ($request->search_name && $request->search_tour_month) {
        $tour_result = Tour::where('tour_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_country_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_city_name','LIKE','%'.$request->search_name.'%')
                            ->where('tour_month',$request->search_tour_month)
                            ->get();
      }

      elseif($request->search_tour_code && $request->search_tour_month) {
        $tour_result = Tour::where('tour_month',$request->search_tour_month)
                            ->where('tour_code','LIKE','%'.$request->search_tour_code.'%')
                            ->get();
      }
      elseif($request->search_name) {
        $tour_result = Tour::where('tour_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_country_name','LIKE','%'.$request->search_name.'%')
                            ->orWhere('tour_city_name','LIKE','%'.$request->search_name.'%')
                            ->get();
      }
      elseif($request->search_tour_code)  {
        $tour_result = Tour::where('tour_code','LIKE','%'.$request->search_tour_code.'%')
                            ->get();
      }
      elseif ($request->search_tour_month) {
        $tour_result = Tour::where('tour_month',$request->search_tour_month)
                            ->get();
      }
      else {
        $tour_result = Tour::all();
      }

      return view('pages.search-result',[
                                          'nav_banner' => $nav_banner,
                                          'continent' => $continent,
                                          'tour_result' => $tour_result,
                                          'search_word' => $search_word,
                                          'airline' => $airline,
                                          'filter_country' => $filter_country,
                                        ]);
    }


}
