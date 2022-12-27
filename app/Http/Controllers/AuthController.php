<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(UserRequest $request)
    {
        try {
            if (Sentinel::authenticate($request->all())) {
                $user = Sentinel::getUser();
                $_SESSION['name'] = $user['name'];
                if($user->inRole('admin')){
                    return redirect(route('admin.home'));
                }else{
                    return redirect(route('home'));
                }
            } else {
                $err = "Username or Password incorrect!";
                return redirect()->back()->with('err', $err);
            }
        }catch (NotActivatedException $e){
            $err = "Account not active!";
        }catch (ThrottlingException $e){
            $delay = $e->getDelay();
            $err = "You has been blocked in {$delay} seconds!";
        }
        return redirect()->back()->withInput()->with('err', $err);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(RegisterRequest $request){
        $user = [
            'name' => $request->get('name'),
            'email' =>$request->get('email'),
            'password' => $request->get('password'),
        ];
        if(Email::checkEmail($user['email'])){
            return redirect()->back()->withInput()->with('emailErr', 'Email is already exist!');
        }
        $role_id = 2;
        $create = Sentinel::registerAndActivate($user);
        $roleUser = Sentinel::findRoleById($role_id);
        $roleUser->users()->attach($create);
        if($create){
            return redirect(route('login'))->withInput();
        }else{
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect(route('login'));
    }
}
