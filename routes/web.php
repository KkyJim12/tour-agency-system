<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UIViewController@ShowIndex');

Route::get('/category/{country_id}','UIViewController@ShowCategory');

Route::get('/aboutus','UIViewController@ShowAboutus');

Route::get('/login','UIViewController@ShowLogin');

Route::post('/login-process','MemberController@LoginProcess');

Route::get('/logout-process','MemberController@LogoutProcess');

Route::get('/tour/{tour_id}','UIViewController@ShowTour');

Route::post('/search-result','UIViewController@ShowSearchResult');

Route::post('/filter-result','TourSearchController@getMatchingTours');

Route::get('/how-to-pay','UIViewController@ShowHowToPay');

/* Backend */

Route::middleware(['admin'])->group(function () {
  /* Admin Dashboard */
  Route::get('/admin','AdminUIController@ShowDashboard')->name('admin-dashboard');



  /**************************** All Continent Function **************************/

  /* Show Continent List */
  Route::get('/admin/admin-continent','AdminUIController@ShowContinent')->name('admin-continent');

  /* Show Create Continent */
  Route::get('/admin/admin-create-continent','AdminUIController@ShowCreateContinent');

  /* Create Continent Process */
  Route::post('/admin/admin-create-continent-process','AdminContinentController@AdminCreateContinentProcess');

  /* Show Edit Continent */
  Route::get('/admin/admin-edit-continent/{continent_id}','AdminUIController@ShowEditContinent');

  /* Edit Continent Process */
  Route::post('/admin/admin-edit-continent-process/{continent_id}','AdminContinentController@AdminEditContinentProcess');

  /* Delete Continent Process */
  Route::post('/admin/admin-delete-continent-process/{continent_id}','AdminContinentController@AdminDeleteContinentProcess');

  /**************************** End Continent Function **************************/





  /**************************** All Country Function **************************/

  /* Show Country List */
  Route::get('/admin/admin-country','AdminUIController@ShowCountry')->name('admin-country');

  /* Show Create country */
  Route::get('/admin/admin-create-country','AdminUIController@ShowCreateCountry');

  /* Create Country Process */
  Route::post('/admin/admin-create-country-process','AdminCountryController@AdminCreateCountryProcess');

  /* Show Edit Country */
  Route::get('/admin/admin-edit-country/{country_id}','AdminUIController@ShowEditCountry');

  /* Edit Country Process */
  Route::post('/admin/admin-edit-country-process/{country_id}','AdminCountryController@AdminEditCountryProcess');

  /* Delete Country Process */
  Route::post('/admin/admin-delete-country-process/{country_id}','AdminCountryController@AdminDeleteCountryProcess');

  /**************************** End Country Function **************************/


  /**************************** All City Function **************************/

  /* Show City List */
  Route::get('/admin/admin-city','AdminUIController@ShowCity')->name('admin-city');

  /* Show Create City */
  Route::get('/admin/admin-create-city','AdminUIController@ShowCreateCity');

  /* Create Country Process */
  Route::post('/admin/admin-create-city-process','AdminCityController@AdminCreateCityProcess');

  /* Show Edit City */
  Route::get('/admin/admin-edit-city/{city_id}','AdminUIController@ShowEditCity');

  /* Edit City Process */
  Route::post('/admin/admin-edit-city-process/{city_id}','AdminCityController@AdminEditCityProcess');

  /* Delete City Process */
  Route::post('/admin/admin-delete-city-process/{city_id}','AdminCityController@AdminDeleteCityProcess');

  /**************************** End City Function **************************/

  /**************************** All Airline Function **************************/

  /* Show Airline List */
  Route::get('/admin/admin-airline','AdminUIController@ShowAirline')->name('admin-airline');

  /* Show Create Airline */
  Route::get('/admin/admin-create-airline','AdminUIController@ShowCreateAirline');

  /* Create Airline Process */
  Route::post('/admin/admin-create-airline-process','AdminAirlineController@AdminCreateAirlineProcess');

  /* Show Edit Airline */
  Route::get('/admin/admin-edit-airline/{airline_id}','AdminUIController@ShowEditAirline');

  /* Edit Airline Process */
  Route::post('/admin/admin-edit-airline-process/{airline_id}','AdminAirlineController@AdminEditAirlineProcess');

  /* Delete Airline Process */
  Route::post('/admin/admin-delete-airline-process/{airline_id}','AdminAirlineController@AdminDeleteAirlineProcess');

  /**************************** End Airline Function **************************/

  /**************************** All Branch Function **************************/

  /* Show Branch List */
  Route::get('/admin/admin-branch','AdminUIController@ShowBranch')->name('admin-branch');

  /* Show Create Branch */
  Route::get('/admin/admin-create-branch','AdminUIController@ShowCreateBranch');

  /* Create Branch Process */
  Route::post('/admin/admin-create-branch-process','AdminBranchController@AdminCreateBranchProcess');

  /* Show Edit Branch */
  Route::get('/admin/admin-edit-branch/{branch_id}','AdminUIController@ShowEditBranch');

  /* Edit Branch Process */
  Route::post('/admin/admin-edit-branch-process/{branch_id}','AdminBranchController@AdminEditBranchProcess');

  /* Delete Branch Process */
  Route::post('/admin/admin-delete-branch-process/{branch_id}','AdminBranchController@AdminDeleteBranchProcess');

  /**************************** End Branch Function **************************/

  /**************************** All Staff Function **************************/

  /* Show Staff List */
  Route::get('/admin/admin-staff','AdminUIController@ShowStaff')->name('admin-staff');

  /* Show Create Staff */
  Route::get('/admin/admin-create-staff','AdminUIController@ShowCreateStaff');

  /* Create Branch Process */
  Route::post('/admin/admin-create-staff-process','AdminStaffController@AdminCreateStaffProcess');

  /* Show Edit Staff */
  Route::get('/admin/admin-edit-staff/{staff_id}','AdminUIController@ShowEditStaff');

  /* Edit Staff Process */
  Route::post('/admin/admin-edit-staff-process/{staff_id}','AdminStaffController@AdminEditStaffProcess');

  /* Delete Staff Process */
  Route::post('/admin/admin-delete-staff-process/{staff_id}','AdminStaffController@AdminDeleteStaffProcess');

  /**************************** End Staff Function **************************/

  /**************************** All Tour Function **************************/

  /* Show Tour List */
  Route::get('/admin/admin-tour','AdminUIController@ShowTour')->name('admin-tour');

  /* Show Create Tour */
  Route::get('/admin/admin-create-tour','AdminUIController@ShowCreateTour');

  /* Create Tour Process */
  Route::post('/admin/admin-create-tour-process','AdminTourController@AdminCreateTourProcess');

  /* Show Edit Tour */
  Route::get('/admin/admin-edit-tour/{tour_id}','AdminUIController@ShowEditTour');

  /* Edit Tour Process */
  Route::post('/admin/admin-edit-tour-process/{tour_id}','AdminTourController@AdminEditTourProcess');

  /* Delete Tour Process */
  Route::post('/admin/admin-delete-tour-process/{tour_id}','AdminTourController@AdminDeleteTourProcess');

  /**************************** End Tour Function **************************/

  /**************************** All Slide Function **************************/

  /* Show Slide List */
  Route::get('/admin/admin-slide','AdminUIController@ShowSlide')->name('admin-slide');

  /* Show Create Slide */
  Route::get('/admin/admin-create-slide','AdminUIController@ShowCreateSlide');

  /* Create Slide Process */
  Route::post('/admin/admin-create-slide-process','AdminSlideController@AdminCreateSlideProcess');

  /* Show Edit Slide */
  Route::get('/admin/admin-edit-slide/{slide_id}','AdminUIController@ShowEditSlide');

  /* Edit Slide Process */
  Route::post('/admin/admin-edit-slide-process/{slide_id}','AdminSlideController@AdminEditSlideProcess');

  /* Delete Slide Process */
  Route::post('/admin/admin-delete-slide-process/{slide_id}','AdminSlideController@AdminDeleteSlideProcess');

  /**************************** End Slide Function **************************/


  /**************************** Other Page *********************************/

  Route::get('/admin/admin-payment','AdminUIController@ShowPaymentPage');

  Route::post('/admin-save-payment-page','AdminOtherPageController@SavePayment');

  Route::get('/admin/admin-aboutus','AdminUIController@ShowAdminOtherPage');

  Route::post('/admin-save-aboutus-page','AdminOtherPageController@SaveAboutus');

  Route::get('/admin/admin-contact','AdminUIController@ShowAdminContactPage');

  Route::post('/admin-save-contact-page','AdminOtherPageController@SaveContact');

  /**************************** End Other Page *****************************/

  /**************************** All Tour Function **************************/
  Route::get('/admin/admin-banner','AdminUIController@ShowBanner');

  Route::post('/admin/admin-banner-save','AdminBannerController@AdminBannerSave');

  /**************************** End Tour Function **************************/
});
