<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaymentPage;
use App\Aboutus;
use App\Contact;

class AdminOtherPageController extends Controller
{

    /** Save Payment Page **/
    public function SavePayment(Request $request) {

      if ($check = PaymentPage::count() >= 1) {
        $paymentpage = PaymentPage::first();
        $paymentpage->content = $request->content;
        $paymentpage->save();
      }

      else {
        $paymentpage = new Paymentpage;
        $paymentpage->content = $request->content;
        $paymentpage->save();
      }

      return redirect()->back();
    }


    /** Save Aboutus Page **/
    public function SaveAboutus(Request $request) {
      if ($check = Aboutus::count() >=1) {
        $aboutuspage = Aboutus::first();
        $aboutuspage->content = $request->content;
        $aboutuspage->save();
      }

      else {
        $aboutuspage = new Aboutus;
        $aboutuspage->content = $request->content;
        $aboutuspage->save();
      }

      return redirect()->back();
    }


    /** Save Contact Page **/
    public function SaveContact(Request $request) {
      if ($check = Contact::count() >=1) {
        $aboutuspage = Contact::first();
        $aboutuspage->content = $request->content;
        $aboutuspage->save();
      }

      else {
        $aboutuspage = new Contact;
        $aboutuspage->content = $request->content;
        $aboutuspage->save();
      }

      return redirect()->back();
    }
}
