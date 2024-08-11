<?php

namespace App\Gateways;
use App\Models\User;
use Str;
use Hash;

class UsersGateway {
    public function newUser(string $email, string $password): void
    {
        $prefixEmail = null;
        preg_match('/^[^@]+/', $email, $prefixEmail);

        $username = $prefixEmail[0] ?? "user-". Str::random(8);
        User::create([
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password)
        ]);
    }
}
