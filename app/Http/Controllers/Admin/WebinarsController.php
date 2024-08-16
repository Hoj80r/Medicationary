<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebinarsController extends Controller
{
    public function landscape(){

        $currentUser = auth()->user();

        return view('admin.webinars.index',compact('currentUser'));
    }

    public function create(){

        $currentUser = auth()->user();

        return view('admin.webinars.add', compact('currentUser'));
    }
}
