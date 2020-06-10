<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Blogs;

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

     public function user_blog_details($id)
    {
        $User=Blogs::where('user_id','=',$id)->get();

        return view('admin.user_blog_details')->with('User',$User);
    }

   
}
 