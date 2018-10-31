<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Continent;
use App\Country;
use App\City;

class AdminUIController extends Controller
{

    /* Shoa Dashboard Page */
    public function ShowDashboard() {
      return view('backend.backend-pages.admin-dashboard');
    }

    /* Show Continent Page */
    public function ShowContinent() {
      $continent = Continent::all();
      return view('backend.backend-pages.continent.admin-continent',[
                                                                      'continent' => $continent,
                                                                    ]);
    }

    /* Show Create Continent Page */
    public function ShowCreateContinent() {
      return view('backend.backend-pages.continent.admin-create-continent');
    }

    /* Show Edit Continent Page */
    public function ShowEditContinent($continent_id) {
      $continent = Continent::where('_id', $continent_id)->first();
      return view('backend.backend-pages.continent.admin-edit-continent',[
                                                                          'continent' => $continent,
                                                                         ]);
    }

    /* Show Country List */
    public function ShowCountry() {
      $country = Country::all();
      return view('backend.backend-pages.country.admin-country',[
                                                                  'country' => $country,
                                                                ]);
    }
    /* Show Create Country Page */
    public function ShowCreateCountry() {
      $continent = Continent::all();
      return view('backend.backend-pages.country.admin-create-country',[
                                                                        'continent' => $continent,
                                                                       ]);
    }

    /* Show Edit Country Page */
    public function ShowEditCountry($country_id) {
      $continent = Continent::all();
      $country = Country::where('_id',$country_id)->first();
      return view('backend.backend-pages.country.admin-edit-country',[
                                                                      'country' => $country,
                                                                      'continent' => $continent,
                                                                     ]);
    }

    /* Show City List */
    public function ShowCity()  {
      $city = City::all();
      return view('backend.backend-pages.city.admin-city',[
                                                            'city' => $city,
                                                          ]);
    }

    /* Show Create City Page */
    public function ShowCreateCity() {
      $country = Country::all();
      return view('backend.backend-pages.city.admin-create-city',[
                                                                  'country' => $country,
                                                                 ]);
    }

    /* Show Edit City Page */
    public function ShowEditCity($city_id)  {
      $country = Country::all();
      $city = City::where('_id',$city_id)->first();
      return view('backend.backend-pages.city.admin-edit-city',[
                                                                'country' => $country,
                                                                'city' => $city,
                                                               ]);
    }

}
