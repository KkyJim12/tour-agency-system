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
}
