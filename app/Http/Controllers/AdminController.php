<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function __construct()
    { }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function trackuserlist()
    {
        $User=User::where('role_id','!=',2)->get();
        return view('admin.trackuserlist')->with('User',$User);
    }

   
}
 