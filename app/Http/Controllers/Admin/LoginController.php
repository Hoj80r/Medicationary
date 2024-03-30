<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function landscape(){

        return view('admin.login.login');
    }

    public function check(LoginRequest $request){

        $validatedData = $request->validated();

        $checkingAdmin= User::find();

    }
}
