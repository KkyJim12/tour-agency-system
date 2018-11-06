<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaymentPage;

class AdminOtherPageController extends Controller
{
    /* Save Payment Page */
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
}
