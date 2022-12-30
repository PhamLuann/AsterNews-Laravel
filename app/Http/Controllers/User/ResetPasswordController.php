<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ForgotPasswordRequest;
use App\Http\Requests\User\ResetPasswordRequest;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgot_password');
    }

    public function sendCode(ForgotPasswordRequest $request)
    {
        $credentials = [
            'email' => $request->get('email'),
        ];
        DB::beginTransaction();
        try {
            $user = Sentinel::findByCredentials($credentials);
            if (!$user) {
                DB::rollBack();
                Session::flash('err', 'Can not found email!');
                return redirect()->back()->withInput();
            }
            $reminder = Reminder::exists($user) ? : Reminder::create($user);
            $code = $reminder->code;
            try {
                Mail::send(
                    'auth.email.__reset_password',
                    compact('user', 'code'),
                    function ($email) use ($user){
                        $email->to($user->email)->subject('Reset your password');
                    }
                );
                DB::commit();
                Session::flash('msg', 'Please check your email to reset password!');
                return redirect()->route('login')->withInput();
            }catch (\Exception $exception){
                DB::rollBack();
                Session::flash('err', 'Send code failed!');
                return redirect()->back()->withInput();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('err', 'Send code failed!');
            return redirect()->back()->withInput();
        }
    }

    public function resetPassword($userId, $code){
        return view('auth.reset_password', compact('userId', 'code'));
    }

    public function processReset(ResetPasswordRequest $request){
        $userId = $request->get('userId');
        $code = $request->get('code');
        DB::beginTransaction();
        $user = Sentinel::findUserById($userId);
        if(!$user){
            Session::flash('err', 'Can not find your account!');
            DB::rollBack();
            return redirect()->route('register');
        }
        $reset = Reminder::complete($user, $code, $request->get('password'));
        if(!$reset){
            DB::rollBack();
            Session::flash('err', 'The verification code has expired');
            return redirect()->back()->withInput();
        }
        DB::commit();
        Session::flash('msg', 'Reset password success!');
        return redirect()->route('login');
    }
}
