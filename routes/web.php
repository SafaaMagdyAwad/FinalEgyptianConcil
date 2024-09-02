<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('testimonials',[PublicController::class,'testimonials'])->name('testimonials');
Route::get('topics-listing',[PublicController::class,'topicsListing'])->name('topicsListing');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::get('topics-detail',[PublicController::class,'topicsDetail'])->name('topicsDetail');




Route::prefix('admin')->group(function () {
    Route::resource('category',CategoryController::class)->except(['show']);
    Route::prefix('message')->name('message')->group(function () {
        Route::controller(MessageController::class)->group(function () {
            Route::get('index','index')->name('.index');
            Route::put('{message}/read','read')->name('.read');
            Route::delete('{message}/destroy','destroy')->name('.destroy');
        });
    });
    Route::resource('user',UserController::class)->except(['show']);
    Route::resource('topic',TopicController::class);
    Route::resource('testimonial',TestimonialController::class);
});

