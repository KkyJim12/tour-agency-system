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
use App\ArticleCat;
use App\Article;
use App\Gallery;
use App\SEO;
use App\Branch;
use App\Holiday;

class UIViewController extends Controller
{

    /** Show Index Page **/
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
      $gallery = Gallery::orderBy('created_at','asc')->first();
      $main_gallery = Gallery::orderBy('created_at','asc')->take(3)->get();
      $seo = SEO::first();
      $holiday = Holiday::all();
      $article = Article::take(7)->get();
      $all_tour_holiday = Tour::where('tour_holiday_id','!=',null)->get();
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
                            'seo' => $seo,
                            'holiday' => $holiday,
                            'article' => $article,
                            'gallery' => $gallery,
                            'main_gallery' => $main_gallery,
                            'all_tour_holiday' => $all_tour_holiday,
                          ]);
    }


    /** Show Category Page **/
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


    /** Show How to pay Page **/
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


    /** Show Contact us Page **/
    public function ShowContactus() {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $content = Contact::first();
      $branch = Branch::all();
      return view('pages.other.contactus',[
                                            'nav_banner' => $nav_banner,
                                            'continent' => $continent,
                                            'content' => $content,
                                            'branch' => $branch,
                                           ]);
    }


    /** Show About us Page **/
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



    /** Show Login Page **/
    public function ShowLogin() {

      if (session('user_log') == 1) {
        return redirect()->route('admin-dashboard');
      }

      else {
        return view('pages.member.login');
      }

    }


    /** Show Tour Page **/
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

      if ($request->search_name != "") {
        $searchConditions[] = ["tour_name", "like", "%$request->search_name%"];
      }

      if ($request->search_tour_month != "") {
        $searchConditions[] = ["tour_month",$request->search_tour_month];
      }

      if ($request->search_tour_code) {
        $searchConditions[] = ["tour_code",$request->search_tour_code];
      }

      if (count($searchConditions) <= 0) {
        $tour_result = Tour::all();
        return view('pages.search-result',[
                                            'nav_banner' => $nav_banner,
                                            'continent' => $continent,
                                            'tour_result' => $tour_result,
                                            'search_word' => $search_word,
                                            'airline' => $airline,
                                            'filter_country' => $filter_country,
                                          ]);
      }
      else {
        $tour_result = Tour::where($searchConditions)->get();
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


    /** Show Article Page **/
    public function ShowArticle() {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $article_cat = ArticleCat::where('article_cat_hide','=',null)->orderBy('article_cat_sort','DESC')->get();

      return view('pages.article.article',[
                                            'nav_banner' => $nav_banner,
                                            'continent' => $continent,
                                            'article_cat' => $article_cat,
                                          ]);
    }


    /** Show Article Category Page **/
    public function ShowArticleCategory($article_category_id) {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $show_article = Article::where('article_cat_id',$article_category_id)->get();
      $this_article_cat = ArticleCat::find($article_category_id);

      return view('pages.article.article-category',[
                                                    'nav_banner' => $nav_banner,
                                                    'continent' => $continent,
                                                    'show_article' => $show_article,
                                                    'this_article_cat' => $this_article_cat,
                                                   ]);
    }


    /** Show Article Content Page **/
    public function ShowArticleContent($article_category_id,$article_id)  {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $article = Article::find($article_id);
      $article_cat = ArticleCat::all();

      return view('pages.article.article-content',[
                                                    'nav_banner' => $nav_banner,
                                                    'continent' => $continent,
                                                    'article' => $article,
                                                    'article_cat' => $article_cat,
                                                  ]);
    }


    /** Show Gallery Page **/
    public function ShowGallery() {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();

      return view('pages.gallery.gallery',[
                                            'nav_banner' => $nav_banner,
                                            'continent' => $continent,
                                          ]);
    }


    /** Show Gallery Country Page **/
    public function ShowGalleryCountry($country_id)  {
      $nav_banner = Banner::where('banner_num','1')->first();
      $continent = Continent::all();
      $this_country = Country::find($country_id);
      $gallery = Gallery::where('gallery_country_id',$country_id)->orderBy('gallery_sort','DESC')->get();

      return view('pages.gallery.gallery-country',[
                                            'nav_banner' => $nav_banner,
                                            'continent' => $continent,
                                            'this_country' => $this_country,
                                            'gallery' => $gallery,
                                          ]);
    }
}
