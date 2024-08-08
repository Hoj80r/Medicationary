<?php

use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\InquiriesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PodcastsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WebinarsController;
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
    Route::get('', function (){
        return view('admin.index');
    })->name('admin.index');
    Route::prefix('users')->group(function (){
        Route::get('',[UsersController::class, 'landscape'])->name('admin.users.landscape');
        Route::get('create',[UsersController::class, 'create'])->name('admin.users.create');
        Route::post('store',[UsersController::class, 'store'])->name('admin.users.store');
        Route::get('{user_id}/edit',[UsersController::class, 'edit'])->name('admin.users.edit');
        Route::put('{user_id}/update',[UsersController::class, 'update'])->name('admin.users.update');
        Route::delete('{user_id}/delete',[UsersController::class, 'delete'])->name('admin.users.delete');
    });
        Route::prefix('login')->group(function (){
            Route::get('',[LoginController::class, 'landscape'])->name('admin.login.landscape');
            Route::post('',[LoginController::class, 'check'])->name('admin.login.check');
    });
        Route::prefix('webinars')->group(function (){
            Route::get('',[WebinarsController::class, 'landscape'])->name('admin.webinars.landscape');
            Route::get('create',[WebinarsController::class, 'create'])->name('admin.webinars.create');
        });
        Route::prefix('podcasts')->group(function (){
            Route::get('',[PodcastsController::class, 'landscape'])->name('admin.podcasts.landscape');
            Route::get('create', [PodcastsController::class, 'create'])->name('admin.podcasts.create');
        });
        Route::prefix('inquiries')->group(function (){
            Route::get('',[InquiriesController::class, 'landscape'])->name('admin.inquiries.landscape');
            Route::get('add',[InquiriesController::class, 'addInquiry'])->name('admin.inquiries.addInquiry');
            Route::get('answer',[InquiriesController::class, 'answer'])->name('admin.inquiries.answer');
        });
        Route::prefix('articles')->group(function (){
            Route::get('',[ArticlesController::class, 'landscape'])->name('admin.articles.landscape');
            Route::get('create',[ArticlesController::class, 'create'])->name('admin.articles.create');
        });

});

Route::prefix('')->group(function (){
    Route::get('',[AccueilController::class, 'landscape'])->name('home.landscape');
    Route::get('webinar',[WeblogController::class, 'webinar'])->name('home.webinar');
    Route::get('ask',[WeblogController::class, 'ask'])->name('home.ask');
    Route::get('answers',[WeblogController::class, 'answers'])->name('home.answers');
    Route::get('podcast',[WeblogController::class, 'podcast'])->name('home.podcast');
    Route::get('blog',[WeblogController::class, 'blog'])->name('home.blog');
    Route::get('article1',[WeblogController::class, 'article1'])->name('home.article1');
});
