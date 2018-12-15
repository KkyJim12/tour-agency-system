<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactInfo;

class ContactController extends Controller
{
    /** Contact Process Save **/
    public function ContactProcess(Request $request)  {


      /** Validate First **/
      $request->validate([
          'contact_name' => 'required',
          'contact_email' => 'required',
          'contact_tel' => 'required',
          'contact_info' => 'required,'
      ]);

      $contactinfo = new ContactInfo;
      $contactinfo->contact_name = $request->contact_name;
      $contactinfo->contact_email = $request->contact_email;
      $contactinfo->contact_tel = $request->contact_tel;
      $contactinfo->contact_info = $request->contact_info;
      $contactinfo->save();

      return redirect()->back()->with('success','ส่งข้อมูลแล้ว');
    }
}
