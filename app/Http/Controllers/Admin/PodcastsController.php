<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    public function landscape(){

        return view('admin.podcasts.index');
    }

    public function create(){

        return view('admin.podcasts.add');
    }
}
