<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Hash;

class AdminUserController extends Controller
{
    public function ShowAllUser() {
        $user = User::all();
        return view('backend.backend-pages.user.index',[
            'user' => $user
        ]);
    }

    public function CreateUser() {
        $role = Role::all();
        return view('backend.backend-pages.user.create',[
            'role' => $role
        ]);
    }

    public function StoreUser(Request $request) {

        /* Validate First */

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

        /* End Validate */

        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole($request->role);

        return redirect('/admin/admin-user');
    }

    public function DestroyUser(Request $request) {
        $user = User::find($request->user_id);

        if($user->email == "admin@royaltour.co.th") {
            return redirect()->back()->with('msg','ไม่สามารถลบ user นี้ได้');
        }

        $user->delete();

        return redirect()->back();
    }
}
