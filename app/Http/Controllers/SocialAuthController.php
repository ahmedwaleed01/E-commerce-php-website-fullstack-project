<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle(){
          try {
            //code...
            $google_user=Socialite::driver('google')->user();
            $user=User::where('google_id',$google_user->getId())->first();
            if(!$user){
                $new_user=User::create([
                    'name'=> $google_user->getName(),
                    'email'=> $google_user->getEmail(),
                    'google_id'=> $google_user->getId()
                ]);
                Auth::login($new_user);
                return view('home');
            }else{
                Auth::login($user);
                return  view('home');
            }
            
          } catch (\Throwable $th) {
            //throw $th;
            dd('somthing is wrong'.$th->getMessage());
          }
    }
}
