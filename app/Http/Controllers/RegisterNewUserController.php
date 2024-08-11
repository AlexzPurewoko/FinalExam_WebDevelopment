<?php

namespace App\Http\Controllers;

use App\Gateways\UsersGateway;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;

class RegisterNewUserController extends Controller
{
    public function __construct(
        private readonly UsersGateway $usersGateway
    ){
    }

    public function __invoke(Request $request): RedirectResponse
    {
        if (!Auth::guest()) {
            return redirect("/");
        }

        $fields = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string'
        ]);

        $this->usersGateway->newUser(
            $fields['email'],
            $fields['password']
        );

        // Attempt to login
        Auth::attempt(['email' => $fields['email'], 'password' => $fields['password']]);

        return redirect('/');
    }
}
