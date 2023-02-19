<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $isadmin=Auth::user()->role_id;
        $user=Auth::user();
        if($isadmin==3){
            return view('home',compact('user'));
        }elseif ($isadmin==1){
            return view('ahome',compact('user'));
        }elseif ($isadmin==2){
            return view('mhome',compact('user'));
        }
        //users.allusers
    }
    public function allusers(){
        $users=User::all();
        return view('users.allusers',compact('users'));
    }
}
