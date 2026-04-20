<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialUser = \Laravel\Socialite\Facades\Socialite::driver($provider)
                ->stateless()
                ->user();

            $user = \App\Models\User::updateOrCreate(
                ['email' => $socialUser->email],
                [
                    'name' => $socialUser->name,
                    'avatar' => $socialUser->avatar,
                    'student_id' => '23810310265'
                ]
            );

            \Illuminate\Support\Facades\Auth::login($user);

            return redirect('/dashboard');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}