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
        $user->user_email = $request->email;
        $user->user_password = Hash::make($request->password);
        $user->save();
        $user->assignRole($request->role);

        return redirect('/admin/admin-user');
    }
}
