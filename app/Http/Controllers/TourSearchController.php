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

class TourSearchController extends Controller
{
    public static function getMatchingTours(Request $request)
    {

        // Prep filter price
        try {
            $priceFilter = $request->filter_price;
            $minimumPrice =  $priceFilter[0];
            $maximumPrice =  $priceFilter[1];
        } catch (\Throwable $priceError) {
            $minimumPrice = '0';
            $maximumPrice = '0';
        }

        $searchConditions = [];

        // Create tour conditions
        if ($request->filter_code != "") {
            $searchConditions[] = ["tour_code", "=", $request->filter_code];
        }
        if ($request->filter_name != "") {
            $searchConditions[] = ["tour_country_name", "like", "%$request->filter_name%"];
        }

        if ($request->filter_country != "") {
          $searchConditions[] = ["tour_country_id", "=", $request->filter_country];
        }

        if ($request->filter_start_date != "") {
            $searchConditions[] = ["tour_start_date", ">=", $request->filter_start_date];
        }
        if ($request->filter_end_date != "") {
            $searchConditions[] = ["tour_end_date", "<=", $request->filter_end_date];
        }
        if ($request->filter_airline != "") {
            $searchConditions[] = ["tour_airline_id", "=", $request->filter_airline];
        }
        if ($minimumPrice >= 0) {
            $searchConditions[] = ["tour_price[0]", ">=", $minimumPrice];
        }
        if ($maximumPrice >= 0 && $maximumPrice > $minimumPrice) {
            $searchConditions[] = ["tour_price[0]", "<=", $maximumPrice];
        }

        // Get all matching tours
        if (count($searchConditions) <= 0) {
            $nav_banner = Banner::where('banner_num','1')->first();
            $tours = Tour::all();
            $filter_country = Country::all();
            $continent = Continent::all();
            $airline = Airline::all();
            return view('pages.filter-result', [
                                              'nav_banner' => $nav_banner,
                                              'continent' => $continent,
                                              'airline' => $airline,
                                              'filter_country' => $filter_country,
                                              'tours' => $tours,
                                            ]);
        } else {
            $tours = Tour::where($searchConditions)->get();
            $nav_banner = Banner::where('banner_num','1')->first();
            $filter_country = Country::all();
            $airline = Airline::all();
            $continent = Continent::all();
            return view('pages.filter-result', [
                                                'nav_banner' => $nav_banner,
                                                'continent' => $continent,
                                                'tours' => $tours,
                                                'airline' => $airline,
                                                'filter_country' => $filter_country,
                                              ]);
        }
    }
}
