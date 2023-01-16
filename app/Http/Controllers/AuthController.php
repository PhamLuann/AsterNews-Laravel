<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\Role;
use App\Models\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function doHandle(User $user){
        $user->last_login = now();
        $user->save();
        Auth::login($user);
        return 'home';
    }
    private function handleDriver($driver){
        try {
            $driverUser = Socialite::driver($driver)->user();
            $credentials = [
                'name' => $driverUser->name,
                'password' => Hash::make($driverUser->email),
                'email' => $driverUser->email,
                'auth_id' => $driverUser->id,
                'createBy' => $driver,
            ];
            $existed = User::where('auth_id', $credentials['auth_id'])->where('createBy', $credentials['createBy'])->first();
            if ($existed) {
                return $this->doHandle($existed);
            } else {
                $user = User::create($credentials);
                return $this->doHandle($user);
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
        $user = User::where('email', $credentials['email'])->first();
        if ($user->activation()->first()->completed) {
            if(Auth::attempt($credentials)){
                return redirect()->route($this->doHandle($user));
            }else{
                return back()->withErrors([
                    'email' => 'Email or password incorrect',
                ])->onlyInput('email');
            }
        }else{
            return back()->withErrors([
                'email' => 'Account not active!',
            ])->withInput();
        }
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
        Auth::logout();
        return redirect(route('login'));
    }
}
