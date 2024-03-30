<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function landscape(){
        return view('admin.users.index');
    }

    public function create(){

        return view('admin.users.add');
    }
}
