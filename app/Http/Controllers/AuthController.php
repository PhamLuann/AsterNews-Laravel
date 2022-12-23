<?php

namespace App\Http\Controllers;
session_start();
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    public function postLogin(UserRequest $request){
        $email = $request->get('email');
        $password = $request->get('password');
        $user = User::where('email', $email)->where('password', $password)->first();
        $_SESSION['name'] = $user['name'];
        if($user == null){
            return redirect(route('login'));
        }else{
            if($user['role']=='admin'){
                return redirect(route('admin.home'));
            }else{
                return redirect(route('home'));
            }
        }
    }

    public function register(){
        return view('auth.register');
    }

    public function postRegister(){

    }

    public function logout(){
        session_destroy();
        return redirect(route('login'));
    }
}
