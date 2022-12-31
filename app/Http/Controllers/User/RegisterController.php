<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Email;
use App\Http\Requests\User\RegisterRequest;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function processRegister(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->offsetSet('createBy', 'Registration');
            if (Email::checkEmail($request->get('email'))) {
                return redirect()->back()->withInput()->with('emailErr', 'Email is already exist!');
            } elseif ($user = Sentinel::register($request->all())) {
                $activationCode = Activation::create($user)->code;
                $role = Sentinel::findRoleBySlug('user');
                $role->users()->attach($user);

                try {
                    $sent = Mail::send(
                        'auth.email.activate',
                        compact('user', 'activationCode'),
                        function ($mail) use ($user) {
                            $mail->to($user->email)->subject('Active your account');
                        }
                    );
                    DB::commit();
                    Session::flash('msg', 'Send mail success');
                    return redirect()->route('login')->withInput();
                } catch (\Exception $exception) {
                    Session::flash('err', 'Send mail failed');
                    DB::rollBack();
                    return redirect()->back()->withInput()->with('emailErr', 'Email is already exist!');
                }
            }
        } catch
        (\Exception $exception) {
            DB::rollBack();
            Session::flash('err', 'Create Account Failed!');
            return redirect()->back()->withInput();
        }
    }

    public function activeAccount($userId, $code)
    {
        $user = Sentinel::findById($userId);
        if (Activation::complete($user, $code)) {
            Session::flash('msg', 'Active success!');
            return redirect()->route('login');
        } else {
            Activation::removeExpired();
            Session::flash('err', 'Active failed!');
            return redirect()->route('register.form');
        }
    }
}
