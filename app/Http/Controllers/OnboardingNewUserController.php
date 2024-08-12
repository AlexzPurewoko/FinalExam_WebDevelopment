<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OnboardingNewUserController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        dd($request->all());
    }
}
