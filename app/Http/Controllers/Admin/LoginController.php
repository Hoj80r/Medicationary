<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function landscape(){
        return view('admin.login.login');
    }

    public function check(LoginRequest $request){
        dd('hello');

        $validatedData = $request->validated();

    }
}
