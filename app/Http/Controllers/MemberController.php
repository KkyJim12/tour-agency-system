<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

class MemberController extends Controller
{

    /** Admin Login Process **/
    public function LoginProcess(Request $request)  {

      if (User::where('user_email',$request->user_email)->count() == 1)  {
        $that_user = User::where('user_email',$request->user_email)->first();
        if (Hash::check($request->user_password,$that_user->user_password)) {
          session([
                    'user_log' => 1,
                    'user_email' => $that_user->user_email,
                  ]);

          return redirect('/admin');
        }
        else {
          return redirect()->back()->with('login_err','อีเมลล์ หรือ รหัสผ่าน ผิด');
        }
      }
      else {
        return redirect()->back()->with('login_err','อีเมลล์ หรือ รหัสผ่าน ผิด');
      }
    }


    /** Admin Log out Process **/
    public function LogoutProcess(Request $request) {
      $request->session()->flush();
      $request->session()->regenerate();
      return redirect('/');
    }

}
