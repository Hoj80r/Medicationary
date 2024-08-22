<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Couchbase\CollectionManager;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function landscape(){

        return view('frontend.homePage');
    }
}

