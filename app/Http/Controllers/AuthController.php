<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function google_login_redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function google_login_callback()
    {
        $user = Socialite::driver('google')->user();
        $newUser = User::where('email' ,$user->email)->where('provider', 'google')->first();
        if(!$newUser){
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => '',
                'provider' => 'google',
                'avatar' => $user->avatar,
            ]);
        }

        auth()->login($newUser);
        return redirect('/');
    }

    public function kakao(Request $request)
    {
        $response = Http::withHeaders([
            'Content-type' => 'application/x-www-form-urlencoded;charset=utf-8',
        ])->get('https://kauth.kakao.com/oauth/token', [
            'client_id' => env('KAKAO_CLIENT_KEY'),
            'redirect_uri' => env('WEBSITE_URL').'auth/kako',
            'code' => $request->code,
            'client_secret' => env('KAKAO_CLIENT_SECRET'),
            'grant_type' => 'authorization_code'
        ]);
        
        $id_token = $response['id_token'];
        $access_token = $response['access_token'];

        $new_response = Http::withHeaders([
            'Authorization' => 'Bearer '.$access_token,
            'Content-type' => 'application/x-www-form-urlencoded;charset=utf-8',
        ])->get('https://kapi.kakao.com/v2/user/me', [
            'secure_resource' => false,
            'property_keys' => ["kakao_account.nickname","kakao_account.email"]
        ]);

        $new_response = json_decode($new_response);

        $user = User::where('email', $new_response->kakao_account->email)->where('provider', 'kakao')->first();
        if(!$user){
            $user = User::create([
                'name' => $new_response->kakao_account->profile->nickname,
                'email' => $new_response->kakao_account->email,
                'password' => '',
                'provider' => 'kakao',
                'avatar' => $new_response->kakao_account->profile->thumbnail_image_url,
            ]);
        }

        auth()->login($user);
        return redirect('/');
    }


    // Naver Integration 
    public function redirectToProviderNaver()
    {
        return Socialite::driver('naver')->redirect();
    }
    public function handleProviderCallbackNaver()
        {
            $user = Socialite::driver('naver')->user();
            // $naveruser = User::where('email' , $user->email)->where('provider', 'naver')->first();
            // if(!$naveruser){
            //     $naveruser = User::create([
            //         'name' => $user->name,
            //         'email' => $user->email,
            //         'password' => '',
            //         'provider' => 'naver',
            //         'avatar' => $user->avatar,
            //     ]);
            // }
    
            auth()->login($user);
            return redirect('/');
        }
}