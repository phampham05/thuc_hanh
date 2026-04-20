<?php

namespace App\Http\Controllers;

abstract class Controller
{
    // public function redirect($provider)
    //     {
    //         return Socialite::driver($provider)
    //             ->scopes(['public_profile'])
    //             ->redirect();
    //     }

    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)
                ->stateless()
                ->user();

            $user = User::updateOrCreate(
                ['email' => $socialUser->email],
                [
                    'name' => $socialUser->name,
                    'avatar' => $socialUser->avatar,
                    'student_id' => 'SV001'
                ]
            );

            Auth::login($user);

            return redirect('/dashboard');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
