<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function getRouteForRole(EloquentUser $user)
    {
        setcookie('name', $user['name'], time() + 86400, '/');
        if ($user->inRole('admin')) {
            return 'admin.home';
        } else {
            return 'home';
        }
    }

    private function handleDriver($driver){
        try {
            $googleUser = Socialite::driver($driver)->user();
            $credentials = [
                'name' => $googleUser->name,
                'password' => $googleUser->email,
                'email' => $googleUser->email,
                'auth_id' => $googleUser->id,
                'createBy' => $driver,
            ];
            $existed = EloquentUser::where('auth_id', $credentials['auth_id'])->where('createBy', $credentials['createBy'])->first();
            if ($existed) {
                Sentinel::authenticate($existed);
                return $this->getRouteForRole($existed);
            } else {
                $register = Sentinel::registerAndActivate($credentials);
                $role = Sentinel::findRoleBySlug('user');
                $role->users()->attach($register);
                $logged = Sentinel::authenticate($register);
                return $this->getRouteForRole($logged);
            }
        } catch (\Exception $exception) {
            Session::flash('err', $exception->getMessage());
            return 'login';
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(UserRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            setcookie('name', $credentials['email'], time() + 86400, '/');
            $request->session()->regenerate();
            return redirect()->intended('post');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleAuthFacebook()
    {
        return redirect()->route($this->handleDriver('facebook'));
    }

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleAuthGoogle()
    {
        return redirect()->route($this->handleDriver('google'));
    }
    public function logout()
    {
        setcookie('name', "", time() - 86400, '/');
        Sentinel::logout();
        return redirect(route('login'));
    }
}
