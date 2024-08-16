<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    public function landscape(){

        $currentUser = auth()->user();

        return view('admin.podcasts.index', compact('currentUser'));
    }

    public function create(){

        $currentUser = auth()->user();

        return view('admin.podcasts.add', compact('currentUser'));
    }
}
