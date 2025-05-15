<?php

use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Back\BackHomePageController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("front")->name("front.")->group(function(){
    Route::get("/",FrontHomeController::class)->name("index")->middleware("auth");
});
require __DIR__.'/auth.php';

Route::prefix("back")->name("back.")->group(function(){
    Route::get("/",BackHomePageController::class)->name("index")->middleware(AdminMiddleware::class);
    require __DIR__.'/adminAuth.php';
});



