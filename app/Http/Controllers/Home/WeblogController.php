<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Podcast;
use App\Models\Post;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class WeblogController extends Controller
{
    public function webinars(){

        $webinars = Webinar::paginate(6);

    return view('frontend.webinar', compact('webinars'));
}
    public function webinarPlayer($webinar_id){

        $webinar = Webinar::findOrFail($webinar_id);

        return view('frontend.webinarPlayer', compact('webinar'));
    }

    public function blog(){

        $posts = Post::paginate(9);

        return view('frontend.blog', compact('posts'));
    }
    public function podcast(){

        $podcasts = Podcast::paginate(9);

        return view('frontend.podcast', compact('podcasts'));
    }
    public function responses(){

        $responses = Answer::paginate(9);

        return view('frontend.answers', compact('responses'));
    }
    public function post($post_id){

        $post = Post::findOrFail($post_id);

        return response()->file($post->post_url);

//        return view('frontend.post', compact('post'));
    }
    public function ask(){

        return view('frontend.ask');
    }

}
