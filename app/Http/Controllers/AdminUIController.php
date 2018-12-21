<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Continent;
use App\Country;
use App\City;
use App\Airline;
use App\Branch;
use App\Staff;
use App\Tour;
use App\PaymentPage;
use App\Banner;
use App\Slide;
use App\Aboutus;
use App\Contact;
use App\ArticleCat;
use App\Article;
use App\Gallery;
use App\SEO;
use App\ContactInfo;
use App\Holiday;
use App\ReserveTour;

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

    /* Show Airline List */
    public function ShowAirline() {
      $airline = Airline::all();
      return view('backend.backend-pages.airline.admin-airline',[
                                                                  'airline' => $airline,
                                                                ]);
    }

    /* Show Create Airline Page */
    public function ShowCreateAirline() {
      return view('backend.backend-pages.airline.admin-create-airline');
    }

    /* Show Edit Airline Page */
    public function ShowEditAirline($airline_id) {
      $airline = Airline::where('_id',$airline_id)->first();
      return view('backend.backend-pages.airline.admin-edit-airline',[
                                                                      'airline' => $airline,
                                                                     ]);
    }

    /* Show Branch List */
    public function ShowBranch()  {
      $branch = Branch::all();
      return view('backend.backend-pages.branch.admin-branch',[
                                                                'branch' => $branch,
                                                              ]);
    }

    /* Show Create Branch Page */
    public function ShowCreateBranch()  {
      return view('backend.backend-pages.branch.admin-create-branch');
    }

    /* Show Edit Branch Page */
    public function ShowEditBranch($branch_id)  {
      $branch = Branch::where('_id',$branch_id)->first();
      return view('backend.backend-pages.branch.admin-edit-branch',[
                                                                    'branch' => $branch,
                                                                   ]);
    }

    /* Show Staff List */
    public function ShowStaff() {
      $staff = Staff::all();
      return view('backend.backend-pages.staff.admin-staff',[
                                                              'staff' => $staff,
                                                            ]);
    }

    /* Show Create Staff Page */
    public function ShowCreateStaff() {
      $branch = Branch::all();
      return view('backend.backend-pages.staff.admin-create-staff',[
                                                                    'branch' => $branch,
                                                                   ]);
    }

    /* Show Edit Staff Page */
    public function ShowEditStaff($staff_id)  {
      $branch = Branch::all();
      $staff = Staff::where('_id',$staff_id)->first();
      return view('backend.backend-pages.staff.admin-edit-staff',[
                                                                  'staff' => $staff,
                                                                  'branch' => $branch,
                                                                 ]);
    }

    /* Show Tour List */
    public function ShowTour()  {
      $tour = Tour::all();
      return view('backend.backend-pages.tour.admin-tour',[
                                                            'tour' => $tour,
                                                          ]);
    }

    /* Show Create Tour Page */
    public function ShowCreateTour()  {
      $staff = Staff::all();
      $country = Country::all();
      $airline = Airline::all();
      $holiday = Holiday::all();
      return view('backend.backend-pages.tour.admin-create-tour',[
                                                                  'staff' => $staff,
                                                                  'country' => $country,
                                                                  'airline' => $airline,
                                                                  'holiday' => $holiday,
                                                                 ]);
    }

    /* Show Edit Tour Page */
    public function ShowEditTour($tour_id)  {
      $staff = Staff::all();
      $country = Country::all();
      $airline = Airline::all();
      $tour = Tour::where('_id',$tour_id)->first();
      $holiday = Holiday::all();
      return view('backend.backend-pages.tour.admin-edit-tour',[
                                                                  'staff' => $staff,
                                                                  'country' => $country,
                                                                  'airline' => $airline,
                                                                  'tour' => $tour,
                                                                  'holiday' => $holiday,
                                                                 ]);
    }

    /* Show Payment Page */
    public function ShowPaymentPage() {
      $content = PaymentPage::first();

        return view('backend.backend-pages.other.admin-payment',[
                                                                  'content' => $content,
                                                                ]);


    }


    /* Show Banner Page */
    public function ShowBanner()  {
      $nav_banner = Banner::where('banner_num','1')->first();
      $second_banner = Banner::where('banner_num','2')->first();
      $third_banner = Banner::where('banner_num','3')->first();
      $fourth_banner = Banner::where('banner_num','4')->first();
      $fifth_banner = Banner::where('banner_num','5')->first();
      $sixth_banner = Banner::where('banner_num','6')->first();
      return view('backend.backend-pages.banner.admin-banner',[
                                                                'nav_banner' => $nav_banner,
                                                                'second_banner' => $second_banner,
                                                                'third_banner' => $third_banner,
                                                                'fourth_banner' => $fourth_banner,
                                                                'fifth_banner' => $fifth_banner,
                                                                'sixth_banner' => $sixth_banner,
                                                              ]);
    }

    /*Show Slide Page*/
    public function ShowSlide() {
      $slide = Slide::all();
      return view('backend.backend-pages.slide.admin-slide',[
                                                              'slide' => $slide,
                                                            ]);
    }

    /*Show Create Slide Page */
    public function ShowCreateSlide() {
      return view('backend.backend-pages.slide.admin-create-slide');
    }

    /*Show Edit Slide Page */
    public function ShowEditSlide($slide_id) {
      $slide = Slide::find($slide_id);
      return view('backend.backend-pages.slide.admin-edit-slide',[
                                                                  'slide' => $slide,
                                                                 ]);
    }

    /* Show Admin Other Page */
    public function ShowAdminOtherPage()  {
      $content = Aboutus::first();
      return view('backend.backend-pages.other.admin-aboutus',[
                                                                'content' => $content,
                                                              ]);
    }

    /* Show Admin Contact Page */
    public function ShowAdminContactPage()  {
      $content = Contact::first();
      return view('backend.backend-pages.other.admin-contact',[
                                                                'content' => $content,
                                                              ]);
    }

    /* Show Admin Article Category Page */
    public function ShowAdminArticleCategoryPage()  {
      $article_cat = ArticleCat::all();
      return view('backend.backend-pages.article.admin-article-cat',[
                                                                      'article_cat' => $article_cat,
                                                                    ]);
    }

    /* Show Admin Create Article Category Page */
    public function ShowCreateArticleCat()  {
      return view('backend.backend-pages.article.admin-create-article-cat');
    }

    /* Show Admin Edit Article Category Page */
    public function ShowEditArticleCat($articlecat_id)  {
      $article_cat = ArticleCat::find($articlecat_id);
      return view('backend.backend-pages.article.admin-edit-article-cat',[
                                                                            'article_cat' => $article_cat,
                                                                         ]);
    }

    /* Show Admin Article */
    public function ShowArticle() {
      $article = Article::all();
      return view('backend.backend-pages.article.admin-article',[
                                                                  'article' => $article,
                                                                ]);
    }

    /* Show Create Article Page */
    public function ShowCreateArticle() {
      $all_article_cat = ArticleCat::all();
      return view('backend.backend-pages.article.admin-create-article',[
                                                                        'all_article_cat' => $all_article_cat,
                                                                       ]);
    }

    /* Show Edit Article Page*/
    public function ShowEDitArticle($article_id)  {
      $article = Article::find($article_id);
      $all_article_cat = ArticleCat::all();
      return view('backend.backend-pages.article.admin-edit-article',[
                                                                      'all_article_cat' => $all_article_cat,
                                                                      'article' => $article,
                                                                     ]);
    }

    /* Show Admin Gallery */
    public function ShowGallery() {
      $gallery = Gallery::all();
      return view('backend.backend-pages.gallery.admin-gallery',[
                                                                  'gallery' => $gallery,
                                                                ]);
    }

    /* Show Admin Create Gallery */
    public function ShowCreateGallery() {
      $country = Country::all();
      return view('backend.backend-pages.gallery.admin-create-gallery',[
                                                                        'country' => $country,
                                                                       ]);
    }

    /*Show Admin Edit Gallery */
    public function ShowEditGallery($gallery_id) {
      $country = Country::all();
      $gallery = Gallery::find($gallery_id);
      return view('backend.backend-pages.gallery.admin-edit-gallery',[
                                                                        'country' => $country,
                                                                        'gallery' => $gallery,
                                                                       ]);
    }

    /*Show Admin SEO */
    public function ShowSeo() {
      $seo = SEO::first();
      return view('backend.backend-pages.seo.admin-seo',[
                                                          'seo' => $seo,
                                                        ]);
    }

    /* Show Contact Info */
    public function ShowContactInfo() {
      $contactinfo = ContactInfo::all();
      return view('backend.backend-pages.contactinfo.admin-contactinfo',[
                                                                          'contactinfo' => $contactinfo,
                                                                        ]);
    }

    /* Show Holiday Page */
    public function ShowHoliday() {
      $holiday = Holiday::all();
      return view('backend.backend-pages.holiday.admin-holiday',[
                                                                  'holiday' => $holiday,
                                                                ]);
    }

    /* Show Create Holiday Page */
    public function ShowCreateHoliday() {
      return view('backend.backend-pages.holiday.admin-create-holiday');
    }

    /* Show Edit Holiday Page */
    public function ShowEditHoliday($holiday_id) {
      $holiday = Holiday::find($holiday_id);
      return view('backend.backend-pages.holiday.admin-edit-holiday',[
                                                                      'holiday' => $holiday,
                                                                     ]);
    }

    /* Show Reserve Tour Page */
    public function ShowReserveTour()  {
      $reserve = ReserveTour::all();
      return view('backend.backend-pages.tour.admin-reserve-tour',[
                                                                    'reserve' => $reserve,
                                                                  ]);
    }
}
