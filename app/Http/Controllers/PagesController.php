<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Result;
use App\Models\FormTwo;
use App\Models\FormFour;
use App\Models\Gallery;
use App\Models\Network;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    function home()
    {
        $data['form_two']  = FormTwo::latest()->take(1)->get();
        $data['form_two_all']  = FormTwo::latest()->get();
        $data['carousel']  = Carousel::latest()->get();
        $data['form_four_all']  = FormFour::latest()->get();
        $data['form_four']  = FormFour::latest()->take(1)->get();
        $data['news']  = News::latest()->take(2)->get();
        $data['social']  = Network::latest()->get();

        return view('/site/index', $data);
    }
    function about()
    {
        $data['social']  = Network::latest()->get();
        $data['staff'] = User::whereIn('role', ['Director', 'Head Master', 'Second Master'])->get();
        return view('/site/about', $data);
    }
    function contact()
    {
        $data['social']  = Network::latest()->get();
        return view('/site/contact');
        // 
    }
    function gallery()
    {
        $data['gallery'] = Gallery::latest()->get();
        $data['social']  = Network::latest()->get();
        return view('/site/gallery', $data);
    }
    function news()
    {
        $data['news'] = News::latest()->get();
        $data['social']  = Network::latest()->get();
        return view('/site/news', $data);
        // 
    }
    function staff()
    {
        $data['staff'] = User::all();
        $data['social']  = Network::latest()->get();
        return view('/site/staff', $data);
        // 
    }
}
