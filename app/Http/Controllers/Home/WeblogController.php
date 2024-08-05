<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeblogController extends Controller
{
    public function webinar(){

    return view('frontend.webinar');
}
    public function blog(){

        return view('frontend.blog');
    }
    public function podcast(){

        return view('frontend.podcast');
    }
    public function answers(){

        return view('frontend.answers');
    }
    public function article1(){

        return view('frontend.article1');
    }
    public function ask(){

        return view('frontend.ask');
    }

}
