<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function landscape(){

        $currentUser = auth()->user();

        return view('admin.articles.index', compact('currentUser'));
    }

    public function create(){

        $currentUser = auth()->user();

        return view('admin.articles.add', compact('currentUser'));
    }
}
