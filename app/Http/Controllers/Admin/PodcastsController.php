<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Podcast\PodcastRequest;
use App\Http\Requests\Admin\Podcast\UpdateRequest;
use App\Models\Podcast;
use App\Utilities\ImageUploader;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    public function landscape()
    {

        $currentUser = auth()->user();

        $podcasts = Podcast::paginate(10);

        return view('admin.podcasts.index', compact('currentUser', 'podcasts'));
    }

    public function create()
    {

        $currentUser = auth()->user();

        return view('admin.podcasts.add', compact('currentUser'));
    }

    public function store(PodcastRequest $request)
    {
        $validatedData = $request->validated();

        $createdPodcast = Podcast::create([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
        ]);

        if (!$this->uploadImage($createdPodcast, $validatedData) or !$createdPodcast) {
            return back()->with('failed', 'خطا در ایجاد پادکست');
        }

        return back()->with('success', 'پادکست با موفقیت ایجاد شد');

    }

    public function edit($podcast_id){

        $currentUser = auth()->user();

        $podcast = Podcast::findOrFail($podcast_id);

        return view('admin.podcasts.edit', compact('podcast','currentUser'));
    }

    public function update(UpdateRequest $request, $podcast_id){
        $validatedData = $request->validated();

        $podcast = Podcast::findOrFail($podcast_id);

        $updatedPodcast = $podcast->update([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
        ]);
        if (!$this->uploadImage($podcast, $validatedData) or !$updatedPodcast) {
            return back()->with('failed', 'خطا در به روزرسانی پادکست');
        }

        return back()->with('success', 'پادکست با موفقیت به روزرسانی شد');

    }

    public function delete($podcast_id){
        $podcast = Podcast::findOrFail($podcast_id);

        $podcast->delete();

        return back()->with('success', 'پادکست حذف شد');
    }

    private function uploadImage($createdPodcast, $validatedData)
    {

        try {
            $data = [];

            if (isset($validatedData['thumbnail_url'])) {
                $path = 'podcasts/' . $createdPodcast->id . '/' . $validatedData['thumbnail_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['thumbnail_url'], $path, 'public_storage');

                $data += ['thumbnail_url' => $path];
            }

            if (isset($validatedData['podcast_url'])) {
                $path = 'podcasts/' . $createdPodcast->id . '/' . $validatedData['podcast_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['podcast_url'], $path, 'local_storage');

                $data += ['podcast_url' => $path];

            }

            $updatedPodcast = $createdPodcast->Update($data);

            if (!$updatedPodcast) {
                throw new \Exception('پادکست آپلود نشد');
            }

            return true;

        } catch (\Exception $e) {
            return false;
        }
    }
}
