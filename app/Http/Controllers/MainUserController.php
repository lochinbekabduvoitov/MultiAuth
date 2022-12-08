<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class MainUserController extends Controller
{
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $user= User::find($id);

        return view('user.profile.view_profile', \compact('user'));
    }
}
