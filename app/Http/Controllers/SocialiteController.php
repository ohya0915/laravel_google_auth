<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;


class SocialiteController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return 301 
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    
    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {   
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        session(['name' => $user->name]);
        session(['email' => $user->email]);

        
        return redirect()->route('dashboard')->with('success', 'You have Successfully loggedin!');
    }
}