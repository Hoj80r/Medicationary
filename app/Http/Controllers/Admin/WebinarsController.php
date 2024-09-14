<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Webinar\UpdateRequest;
use App\Http\Requests\Admin\Webinar\WebinarRequest;
use App\Models\Webinar;
use App\Utilities\ImageUploader;
use Illuminate\Http\Request;

class WebinarsController extends Controller
{
    public function landscape(){

        $currentUser = auth()->user();

        $webinars = Webinar::paginate(10);

        return view('admin.webinars.index',compact('currentUser', 'webinars'));
    }

    public function create(){

        $currentUser = auth()->user();

        return view('admin.webinars.add', compact('currentUser'));
    }

    public function store(WebinarRequest $request){

        $validatedData = $request->validated();

        $currentUser = auth()->user();

        $createdWebinar = Webinar::create([
            'user_id' => $currentUser['id'],
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'instructor' => $validatedData['instructor'],
            'webinar_status' => $validatedData['webinar_status'],
        ]);

        if (!$this->uploadImage($createdWebinar, $validatedData) or !$createdWebinar) {
            return back()->with('failed', 'خطا در ایجاد وبینار');
        }

        return back()->with('success', 'وبینار با موفقیت ایجاد شد');

    }

    public function edit($webinar_id){

        $currentUser = auth()->user();

        $webinar = Webinar::findOrFail($webinar_id);

        return view('admin.webinars.edit', compact('currentUser','webinar'));

    }

    public function update(UpdateRequest $request, $webinar_id){
        $validatedData = $request->validated();

        $currentUser = auth()->user();

        $webinar = Webinar::findOrFail($webinar_id);

        $updatedWebinar = $webinar->update([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'instructor' => $validatedData['instructor'],
            'webinar_status' => $validatedData['webinar_status'],
            'user_id' => $currentUser['id']
        ]);

        if (!$this->uploadImage($webinar, $validatedData) or !$updatedWebinar) {
            return back()->with('failed', 'خطا در به روزرسانی وبینار');
        }

        return back()->with('success', 'وبینار با موفقیت به روزرسانی شد');

    }

    public function download($webinar_id)
    {
        $webinar = Webinar::findOrFail($webinar_id);

        return response()->download(public_path($webinar->webinar_url));
    }

    public function delete($webinar_id){
        $webinar = Webinar::findOrFail($webinar_id);

        $webinar->delete();

        return back()->with('success', 'وبینار حذف شد');


    }

    private function uploadImage($createdWebinar, $validatedData)
    {

        try {
            $data = [];

            if (isset($validatedData['thumbnail_url'])) {
                $path = 'webinars/' . $createdWebinar->id . '/' . $validatedData['thumbnail_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['thumbnail_url'], $path, 'public_storage');

                $data += ['thumbnail_url' => $path];
            }

            if (isset($validatedData['webinar_url'])) {
                $path = 'webinars/' . $createdWebinar->id . '/' . $validatedData['webinar_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['webinar_url'], $path, 'public_storage');

                $data += ['webinar_url' => $path];
            }

            if (isset($validatedData['instructor_thumbnail_url'])) {
                $path = 'webinars/' . $createdWebinar->id . '/' . $validatedData['instructor_thumbnail_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['instructor_thumbnail_url'], $path, 'public_storage');

                $data += ['instructor_thumbnail_url' => $path];
            }

            $updatedWebinar = $createdWebinar->Update($data);

            if (!$updatedWebinar) {
                throw new \Exception('وبینار آپلود نشد');
            }

            return true;

        } catch (\Exception $e) {
            return false;
        }
    }
}
