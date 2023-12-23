<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function about()
    {
        // 
        return view('/site/about');
    }
    function contact()
    {
        return view('/site/contact');
        // 
    }
    function gallery()
    {
        return view('/site/gallery');
        // 
    }
    function news()
    {
        return view('/site/news');
        // 
    }
    function staff()
    {
        return view('/site/staff');
        // 
    }
}
