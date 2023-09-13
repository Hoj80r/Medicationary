<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebinarsController extends Controller
{
    public function landscape(){

        return view('admin.webinars.index');
    }

    public function create(){

        return view('admin.webinars.add');
    }
}
