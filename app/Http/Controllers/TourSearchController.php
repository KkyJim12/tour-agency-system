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
    public static function getMatchingTours(
        String $countryName,
        String $departDate,
        String $returnDate,
        String $airlineName,
        Int $minimumPrice,
        Int $maximumPrice,
        String $tourCode
    ) {
        $searchConditions = [];

        // Create tour conditions
        if ($tourCode != "") {
            $searchConditions[] = ["tour_code", "=", $tourCode];
        }
        if ($countryName != "") {
            $searchConditions[] = ["tour_country_name", "like", "%$countryName%"];
        }
        if ($departDate != "") {
            $searchConditions[] = ["tour_start_date", "=", $departDate];
        }
        if ($returnDate != "") {
            $searchConditions[] = ["tour_end_date", "=", $returnDate];
        }
        if ($airlineName != "") {
            $searchConditions[] = ["tour_airline_name", "=", $airlineName];
        }
        if ($minimumPrice >= 0) {
            $searchConditions[] = ["tour_price", ">=", (int) $minimumPrice];
        }
        if ($maximumPrice >= 0 && $maximumPrice > $minimumPrice) {
            $searchConditions[] = ["tour_price", "<=", (int) $maximumPrice];
        }

        // Get all matching tours
        if (count($searchConditions) <= 0) {
            return [];
        } else {
            $tours = Tour::where($searchConditions)->get();
            return $tours;
        }
    }
}
