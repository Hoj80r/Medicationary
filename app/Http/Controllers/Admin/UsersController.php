<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Http\Requests\Admin\Users\UpdateRequest;
use App\Models\User;
use App\Utilities\ImageUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function landscape(){

        $users = User::paginate(10);

        return view('admin.users.index', compact('users'));
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
            'profile_url' => $validatedData['profile_url'],
            'description' => $validatedData['description']
        ]);
        if (!$createdUser){
            return back()->with('failed', 'کابر ایجاد نشد');
        }

        try {

            $path = 'profiles/' . $createdUser->id . '/' . $validatedData['profile_url']->getClientOriginalName();

            ImageUploader::Upload($validatedData['profile_url'],$path,'public_storage');

            $updatedProduct = $createdUser->Update([
                'profile_url' => $path
            ]);

            if(!$updatedProduct){
                throw new \Exception('تصاوریر آپلود نشدند');
            }

            return back()->with('success', 'کاربر ایجاد شد');

        }catch (\Exception $e){
            return back()->with('failed', $e->getMessage());
        }
    }

    public function edit($user_id){
        $user = User::findOrFail($user_id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateRequest $request, $user_id){
        $validatedData = $request->validated();

        $user = User::findOrFalil($user_id);

        $updatedUser = $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'password' => $validatedData['password'],
            'role' => $validatedData['role'],
            'profile_url' => $validatedData['profile_url'],
            'description' => $validatedData['description']
        ]);

        if (!$updatedUser){
            return back()->with('failed', 'کاربر بروزرسانی نشد!');
        }

        return back()->with('success', 'کاربر بروزرسانی شد');

    }

    public function delete($user_id){
        $user = User::findOrFail($user_id);

        $user->delete();

        return back()->with('success', 'کاربر حذف شد');
    }

}

