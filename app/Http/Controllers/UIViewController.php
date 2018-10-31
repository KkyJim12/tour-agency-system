<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIViewController extends Controller
{
    public function ShowIndex() {
      return view('index');
    }

    public function ShowCategory()  {
      return view('pages.category');
    }

    public function ShowAboutus() {
      return view('pages.aboutus');
    }

    public function ShowLogin() {

      if (session('user_log') == 1) {
        return redirect()->route('admin-dashboard');
      }

      else {
        return view('pages.member.login');
      }

    }
}
