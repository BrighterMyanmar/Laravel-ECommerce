<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('home');
    }
    public function login(Request $request){
       $phone = $request->input('phone');
       $password = $request->get('password');

       $user = User::where('phone',$phone)->first();
       if(Hash::check($password,$user->password)){
            Auth::login($user);
            return redirect()->route('home');
       }else{
           return redirect()->back()->with('error',"Login Fail");
       }
    }
}
