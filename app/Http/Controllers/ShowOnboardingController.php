<?php

namespace App\Http\Controllers;

use App\Models\UserProfiles;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;
use DB;


class ShowOnboardingController extends Controller
{
    public function __invoke(Request $request): View
    {
        if (Auth::guest()) {
            abort(404);
        }

        UserProfiles::initializeIfNotExist(Auth::id());

        $profile = DB::table('user_profiles as up')
            ->where('up.user_id', Auth::id())
            ->join('users', 'users.id', '=', 'up.user_id')
            ->select(['up.name', 'users.username', 'up.birthday', 'up.biodata', 'up.photo'])
            ->first();
        return view('onboarding', (array) $profile);
    }
}
