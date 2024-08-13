<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function landscape(){

        $users = User::all();

        return view('admin.index', compact('users'));
    }
}
