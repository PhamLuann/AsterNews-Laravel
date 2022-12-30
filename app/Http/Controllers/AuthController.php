<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

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
                setcookie('name', $user['name'], time()+86400, '/');
                if($user->inRole('admin')){
                    return redirect(route('admin.home'));
                }else{
                    return redirect(route('home'));
                }
            } else {
                $err = "Username or Password incorrect!";
                return redirect()->back()->with('errLogin', $err)->withInput();
            }
        }catch (NotActivatedException $e){
            $err = "Account not active!";
        }catch (ThrottlingException $e){
            $delay = $e->getDelay();
            $err = "You has been blocked in {$delay} seconds!";
        }
        return redirect()->back()->withInput()->with('errLogin', $err);
    }

    public function logout()
    {
        setcookie('name', "", time()-86400, '/');
        Sentinel::logout();
        return redirect(route('login'));
    }
}
