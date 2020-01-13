<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent;
use App\Country;
use App\City;
use App\Tour;
use App\PaymentPage;
use App\Airline;
use App\Banner;
use App\Slide;
use App\Setting;

class TourSearchController extends Controller
{
    public static function getMatchingTours(Request $request)
    {

        // Prep filter price
        try {
            $priceFilter = explode(";", $request->filter_price);
            $minimumPrice = (int) $priceFilter[0];
            $maximumPrice = (int) $priceFilter[1];
        } catch (\Throwable $priceError) {
            $minimumPrice = 0;
            $maximumPrice = 0;
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
            $searchConditions[] = ["tour_price_show", ">=", $minimumPrice];
        }
        if ($maximumPrice >= 0 && $maximumPrice > $minimumPrice) {
            $searchConditions[] = ["tour_price_show", "<=", $maximumPrice];
        }

        // Get all matching tours
        if (count($searchConditions) <= 0) {
            $nav_banner = Banner::where('banner_num', '1')->first();
            $tours = Tour::all();
            $filter_country = Country::all();
            $continent = Continent::all();
            $airline = Airline::all();
            $filter_banner = Setting::where('tag', 'background_filter')->first();
            return view('pages.filter-result', [
                'nav_banner' => $nav_banner,
                'continent' => $continent,
                'airline' => $airline,
                'filter_country' => $filter_country,
                'tours' => $tours,
                'filter_banner' => $filter_banner
            ]);
        } else {
            $tours = Tour::where($searchConditions)->get();
            $nav_banner = Banner::where('banner_num', '1')->first();
            $filter_country = Country::all();
            $airline = Airline::all();
            $continent = Continent::all();
            $filter_banner = Setting::where('tag', 'background_filter')->first();
            return view('pages.filter-result', [
                'nav_banner' => $nav_banner,
                'continent' => $continent,
                'tours' => $tours,
                'airline' => $airline,
                'filter_country' => $filter_country,
                'filter_banner' => $filter_banner
            ]);
        }
    }


    public function getCityOrCountryList(Request $request, City $city, Country $country)
    {
        if ($request->input("csquery") != "") {
            $qr = (string) $request->input("csquery");
            $matchingCities = $city->where("city_name", "like", "%$qr%")->get();
            $matchingCountries = $country->where("country_name", "like", "%$qr%")->get();
            $results = [];
            foreach ($matchingCities as $mc) {
                $results[] = [
                    "type" => "city",
                    "name" => (string) $mc->city_name,
                    "id" => (string) $mc->_id
                ];
            }
            foreach ($matchingCountries as $mc2) {
                $results[] = [
                    "type" => "country",
                    "name" => (string) $mc2->country_name,
                    "id" => (string) $mc2->_id
                ];
            }
            return response()->json($results);
        } else {
            return response()->json([]);
        }
    }
}
