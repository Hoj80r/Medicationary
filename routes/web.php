<?php

use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\Blog\PostController;
use App\Http\Controllers\Admin\InquiriesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PodcastsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WebinarsController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Home\AccueilController;
use App\Http\Controllers\Home\WeblogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group این خط یعنی چی؟ ما که وب میدل ور نداریم، کجاس این؟. Make something great!
|
*/


Route::prefix('admin')->group(function(){
    Route::get('',[IndexController::class, 'landscape'])->name('admin.index.landscape')->middleware('auth');

    Route::prefix('users')->middleware('auth')->group(function (){
        Route::get('',[UsersController::class, 'landscape'])->name('admin.users.landscape');
        Route::get('create',[UsersController::class, 'create'])->name('admin.users.create');
        Route::post('store',[UsersController::class, 'store'])->name('admin.users.store');
        Route::get('{user_id}/edit',[UsersController::class, 'edit'])->name('admin.users.edit');
        Route::put('{user_id}/update',[UsersController::class, 'update'])->name('admin.users.update');
        Route::delete('{user_id}/delete',[UsersController::class, 'delete'])->name('admin.users.delete');
    });
        Route::prefix('login')->group(function (){
            Route::get('',[LoginController::class, 'landscape'])->name('login');
            Route::get('/logout',[LoginController::class, 'logout'])->name('admin.logout');
            Route::post('/login',[LoginController::class, 'check'])->name('admin.login.check');
    });
        Route::prefix('webinars')->middleware('auth')->group(function (){
            Route::get('',[WebinarsController::class, 'landscape'])->name('admin.webinars.landscape');
            Route::get('create',[WebinarsController::class, 'create'])->name('admin.webinars.create');
            Route::post('store',[WebinarsController::class, 'store'])->name('admin.webinars.store');
            Route::get('{webinar_id}/edit',[WebinarsController::class, 'edit'])->name('admin.webinars.edit');
            Route::put('{webinar_id}/update',[WebinarsController::class, 'update'])->name('admin.webinars.update');
            Route::delete('{webinar_id}/delete',[WebinarsController::class, 'delete'])->name('admin.webinars.delete');

            Route::get('{product_id}/download',[WebinarsController::class,'download'])->name('admin.webinars.download');

        });
        Route::prefix('podcasts')->middleware('auth')->group(function (){
            Route::get('',[PodcastsController::class, 'landscape'])->name('admin.podcasts.landscape');
            Route::get('create', [PodcastsController::class, 'create'])->name('admin.podcasts.create');
            Route::post('store', [PodcastsController::class, 'store'])->name('admin.podcasts.store');
            Route::get('{podcast_id}/edit', [PodcastsController::class, 'edit'])->name('admin.podcasts.edit');
            Route::put('{podcast_id}/update', [PodcastsController::class, 'update'])->name('admin.podcasts.update');
            Route::delete('{podcast_id}/delete', [PodcastsController::class, 'delete'])->name('admin.podcasts.delete');

            Route::get('{product_id}/download',[PodcastsController::class,'download'])->name('admin.podcasts.download');

        });
        Route::prefix('inquiries')->middleware('auth')->group(function (){
            Route::get('',[InquiriesController::class, 'landscape'])->name('admin.inquiries.landscape');
            Route::get('input',[InquiriesController::class, 'input'])->name('admin.inquiries.input');
            Route::get('{question_id}/answer',[InquiriesController::class, 'answer'])->name('admin.inquiries.answer');
            Route::post('{question_id}/insert',[InquiriesController::class, 'insert'])->name('admin.inquiries.insert');
            Route::get('{answer_id}/edit',[InquiriesController::class, 'edit'])->name('admin.inquiries.edit');
            Route::put('{answer_id}/update',[InquiriesController::class, 'update'])->name('admin.inquiries.update');
            Route::delete('{answer_id}/delete',[InquiriesController::class, 'delete'])->name('admin.inquiries.delete');

            Route::get('{product_id}/download',[InquiriesController::class,'download'])->name('admin.inquiries.download');

        });
        Route::prefix('post')->middleware('auth')->group(function (){
            Route::get('',[PostController::class, 'index'])->name('admin.post.index');
            Route::get('create',[PostController::class, 'create'])->name('admin.post.create');
            Route::post('store',[PostController::class, 'store'])->name('admin.post.store');
            Route::get('{post_id}/edit',[PostController::class, 'edit'])->name('admin.post.edit');
            Route::put('{post_id}/update',[PostController::class, 'update'])->name('admin.post.update');
            Route::delete('{post_id}/delete',[PostController::class, 'delete'])->name('admin.post.delete');
//            Route::get('create',[CommentController::class, 'create'])->name('admin.articles.create');
            Route::get('{product_id}/download',[PostController::class,'download'])->name('admin.post.download');

        });

});

Route::prefix('')->group(function (){
    Route::get('',[AccueilController::class, 'landscape'])->name('home.landscape');
    Route::get('webinarsList',[WeblogController::class, 'webinars'])->name('home.webinarsList');
    Route::get('webinar/{webinar_id}/webinarPlayer',[WeblogController::class, 'webinarPlayer'])->name('home.webinarPlayer');
    Route::get('ask',[WeblogController::class, 'ask'])->name('home.ask');
    Route::post('add',[InquiriesController::class, 'addInquiries'])->name('admin.inquiries.addInquiries');
    Route::get('responses',[WeblogController::class, 'responses'])->name('home.responses');
    Route::get('podcast',[WeblogController::class, 'podcast'])->name('home.podcast');
    Route::get('blog',[WeblogController::class, 'blog'])->name('home.blog');
    Route::get('blog/post{post_id}',[WeblogController::class, 'post'])->name('home.post');
});
