<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function home(Request $request)
    {
        return view('frontend.pages.homepage');
    }

    function about(Request $request)
    {
        return view('frontend.pages.about');
    }

    function contact(Request $request)
    {
        return view('frontend.pages.contact');
    }

    function myProject(Request $request)
    {
        return view('frontend.pages.projects');
    }
}
