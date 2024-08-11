<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterShowController;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['before' => 'auth'], function () {
    Route::get('/', function () {
        if(!Auth::guest()){
            return redirect('login');
        }

        return view('welcome');
    });

    Route::get('login', LoginController::class)->name('login');
    Route::post('login', function () {
        return new JsonResponse();
    })->name("login.post");

    Route::get("register", function () {
        return view("register");
    })->name("register");

    Route::post("register", function () {
        dd(Request::all());
    })->name("register.post");
});

Route::get('login', LoginController::class)->name('login');
// Route::get('register', RegisterShowController::class)->name('register');

Route::get('posts');
Route::get('me');
Route::get('peoples');
Route::get('peoples/{username}');
Route::get('peoples/{username}');
