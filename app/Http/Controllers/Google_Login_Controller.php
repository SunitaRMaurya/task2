<?php

namespace App\Http\Controllers;

use App\Models\Google_Login;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\user;
class Google_Login_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function redirectToProvider()
    {

    return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()

    {

         $user = Socialite::driver('google')->user();

         $user=user::where("id",'$user->id')->first();

         if(empty($user)){
            Auth::login($user);

         }
        
          // return $user->token;

    }
}
