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

        $currentUser = auth()->user();

        $users = User::paginate(10);

        return view('admin.users.index', compact('users', 'currentUser'));
    }

    public function create(){

        $currentUser = auth()->user();

        return view('admin.users.add', compact('currentUser'));
    }
    public function store(StoreRequest $request){
        $validatedData = $request->validated();

        $createdUser = User::create([
              'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'password' => $validatedData['password'],
            'role' => $validatedData['role'],
            'description' => $validatedData['description']
        ]);
        if (!$this->uploadImage($createdUser, $validatedData) or !$createdUser){
            return back()->with('failed', 'خطا در ایجاد کاربر');
        }

        return back()->with('success', 'کاربر با موفقیت ایجاد شد');

    }

    public function edit($user_id){

        $currentUser = auth()->user();

        $user = User::findOrFail($user_id);

        return view('admin.users.edit', compact('user', 'currentUser'));
    }

    public function update(UpdateRequest $request, $user_id){
        $validatedData = $request->validated();

        $user = User::findOrFail($user_id);

        $updatedUser = $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'role' => $validatedData['role'],
            'description' => $validatedData['description']
        ]);

        if (!$this->uploadImage($user, $validatedData) or !$updatedUser){
            return back()->with('failed', 'خطا در بروزرسانی اطلاعات');
        }

        return back()->with('success', 'اطلاعات به روزرسانی شدند');

    }

    public function delete($user_id){
        $user = User::findOrFail($user_id);

        $user->delete();

        return back()->with('success', 'کاربر حذف شد');
    }

    private function uploadImage($createdUser, $validatedData){

        try {
            $data = [];

            if (isset($validatedData['profile_url'])){
                $path = 'profiles/' . $createdUser->id . '/' . $validatedData['profile_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['profile_url'],$path,'public_storage');

                $data += ['profile_url' => $path] ;
            }

            $updatedUser = $createdUser->Update($data);

            if(!$updatedUser){
                throw new \Exception('تصویر آپلود نشد');
            }

            return true;

        }catch (\Exception $e){
            return false;
        }
    }

}

