<?php

use App\Http\Controllers\OnboardingNewUserController;
use App\Http\Controllers\ShowOnboardingController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\RegisterNewUserController;
use App\Http\Controllers\RegisterShowController;
use App\Models\User;
use App\Models\UserProfiles;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('login', function() {
        if (!Auth::guest()) {
            return redirect('/');
        }

        return view("login");
    })->name('login');

    Route::post('login', UserLoginController::class)->name("login.post");

    Route::get("register", function () {
        if (!Auth::guest()) {
            return redirect('/');
        }

        return view("register");
    })->name("register");

    Route::post("register", RegisterNewUserController::class)->name("register.post");
    Route::get("logout", function() {
        if (Auth::guest()) {
            return redirect()->back();
        }

        Auth::logout();
        return redirect('/');
    });

    Route::get('onboarding', ShowOnboardingController::class);
    Route::post('onboarding', OnboardingNewUserController::class)->name('onboarding.post');
// });
// Route::get('register', RegisterShowController::class)->name('register');

// Route::get('posts');
// Route::get('me');
// Route::get('peoples');
// Route::get('peoples/{username}');
// Route::get('peoples/{username}');
