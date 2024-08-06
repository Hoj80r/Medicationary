<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function landscape(){
        return view('admin.users.index');
    }

    public function create(){

        return view('admin.users.add');
    }
    public function store(StoreRequest $request){
        $validatedData = $request->validated();

        $createdUser = User::create([
              'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'password' => $validatedData['password'],
            'role' => $validatedData['role'],
            'profile_url' => $validatedData['profile_url']
        ]);
        if (!$createdUser){
            return back()->with('failed', 'کابر ایجاد نشد');
        }

        return back()->with('success', 'کاربر ایجاد شد');
    }
}

