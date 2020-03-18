<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        return view('auth.pages.about');
    }

    public function contact()
    {
        return view('auth.pages.contact');
    }

    public function services()
    {
        return view('auth.pages.services');
    }

    public function careers()
    {
        return view('auth.pages.careers');
    }

    public function help()
    {
        return view('auth.pages.help');
    }

    public function faq()
    {
        return view('auth.pages.faq');
    }

    public function terms_conditions()
    {
        return view('auth.pages.terms_conditions');
    }

    public function privacy_policy()
    {
        return view('auth.pages.privacy_policy');
    }

    public function sitemap()
    {
        return view('auth.pages.sitemap');
    }
}
