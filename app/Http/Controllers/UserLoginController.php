<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

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
        if (Auth::attempt($fields)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
