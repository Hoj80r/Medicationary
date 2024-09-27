<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\Models\Post;
use App\Models\User;
use Couchbase\CollectionManager;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function landscape(){

        $posts = Post::latest()->take(4)->get();

        return view('frontend.homePage', compact('posts'));
    }
}

