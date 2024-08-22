<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function landscape(){

        $currentUser = auth()->user();

        $users = User::all();

        return view('admin.index', compact('users', 'currentUser'));
    }
}


