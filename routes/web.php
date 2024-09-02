<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\MessageController;
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


Route::resource('category',CategoryController::class);

Route::get('message/index',[MessageController::class,'index'])->name('message.index');
Route::put('message/{message}/read',[MessageController::class,'read'])->name('message.read');
Route::delete('message/{message}/destroy',[MessageController::class,'destroy'])->name('message.destroy');
