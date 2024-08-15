<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function landscape(){

        return view('admin.login.login');
    }

    public function check(LoginRequest $request){

        $validatedData = $request->validated();

        if (\auth()->attempt(['email' => $validatedData['email_X'], 'password' => $validatedData['password_X']])){

            return redirect('/admin');
        }
        return redirect()->back()->with('failed', 'اطلاعات وارد شده اشتباه میباشد');

    }

    public function logout(){

        \auth()->logout();

        return redirect('/admin/login');

    }
}
