<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

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

    public function redirectFacebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handleAuthFacebook(){

    }

    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleAuthGoogle(){
        try {
            $user = Socialite::driver('google')->user();
            $credentials = [
                'email' => $user->email,
                'auth_id' => $user->id,
                'createBy' => 'Google',
            ];
            $existed = Sentinel::findByCredentials($credentials);
            if($existed){
                Sentinel::authenticate($existed);
                $logged = Sentinel::getUser();
                setcookie('name', $existed['name'], time()+86400, '/');
                if($logged->inRole('admin')){
                    return redirect(route('admin.home'));
                }else{
                    return redirect(route('home'));
                }
            }else{
                $credentials['name'] = $user->name;
                $credentials['password'] = $user->email;
                $register = Sentinel::registerAndActivate($credentials);
                $role = Sentinel::findRoleBySlug('user');
                $role->users()->attach($register);

                Sentinel::authenticate($credentials);
                $logged = Sentinel::getUser();
                setcookie('name', $user['name'], time()+86400, '/');
                if($logged->inRole('admin')){
                    return redirect(route('admin.home'));
                }else{
                    return redirect(route('home'));
                }
            }
        }catch (\Exception $exception){
            Session::flash('err', 'Can not login with this account!');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        setcookie('name', "", time()-86400, '/');
        Sentinel::logout();
        return redirect(route('login'));
    }
}
