<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;

class UserLoginController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        if (!Auth::guest()) {
            return redirect("/");
        }

        $fields = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string'
        ]);

        // Attempt to login
        Auth::attempt(['email' => $fields['email'], 'password' => $fields['password']]);

        return redirect('/');
    }
}
