<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
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
                setcookie('name', $user['name'], time() + 86400, '/');
                if ($user->inRole('admin')) {
                    return redirect(route('admin.home'));
                } else {
                    return redirect(route('home'));
                }
            } else {
                $err = "Username or Password incorrect!";
                return redirect()->back()->with('errLogin', $err)->withInput();
            }
        } catch (NotActivatedException $e) {
            $err = "Account not active!";
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $err = "You has been blocked in {$delay} seconds!";
        }
        return redirect()->back()->withInput()->with('errLogin', $err);
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleAuthFacebook()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            $credentials = [
                'name' => $facebookUser->name,
                'password' => $facebookUser->email,
                'email' => $facebookUser->email,
                'auth_id' => $facebookUser->id,
                'createBy' => 'Facebook',
            ];
            $existed = EloquentUser::where('auth_id', $credentials['auth_id'])->where('createBy', $credentials['createBy'])->first();
            if ($existed){
                $logged = Sentinel::authenticate($credentials);
                setcookie('name', $logged['name'], time()+86400, '/');
                if ($logged->inRole('admin')){
                    return redirect()->route('admin.home');
                }else{
                    return redirect()->route('home');
                }
            }else{
                //for add new user
                $register = Sentinel::registerAndActivate($credentials);
                $role = Sentinel::findRoleBySlug('user');
                $role->users()->attach($register);
                //for login
                Sentinel::authenticate($register);
                setcookie('name', $register['name'], time()+86400, '/');
                if ($register->inRole('admin')){
                    return redirect()->route('admin.home');
                }else{
                    return redirect()->route('home');
                }
            }
        } catch (\Exception $exception) {
            Session::flash('err', $exception->getMessage());
            return redirect()->route('login');
        }
    }

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleAuthGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $credentials = [
                'name' =>$googleUser->name,
                'password' => $googleUser->email,
                'email' => $googleUser->email,
                'auth_id' => $googleUser->id,
                'createBy' => 'Google',
            ];
            $existed = EloquentUser::where('auth_id', $credentials['auth_id'])->where('createBy', $credentials['createBy'])->first();
            if ($existed) {
                Sentinel::authenticate($existed);
                setcookie('name', $existed['name'], time() + 86400, '/');
                if ($existed->inRole('admin')) {
                    return redirect(route('admin.home'));
                } else {
                    return redirect(route('home'));
                }
            } else {
                $register = Sentinel::registerAndActivate($credentials);
                $role = Sentinel::findRoleBySlug('user');
                $role->users()->attach($register);
                Sentinel::authenticate($register);
                setcookie('name', $register['name'], time() + 86400, '/');
                if ($register->inRole('admin')) {
                    return redirect(route('admin.home'));
                } else {
                    return redirect(route('home'));
                }
            }
        } catch (\Exception $exception) {
            Session::flash('err', $exception->getMessage());
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        setcookie('name', "", time() - 86400, '/');
        Sentinel::logout();
        return redirect(route('login'));
    }
}
