<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Email;
use App\Http\Requests\User\RegisterRequest;
use App\Models\Activation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
            if (Email::checkEmail($request->get('email'))) {
                return redirect()->back()->withInput()->with('emailErr', 'Email is already exist!');
            } else {
                $creadentials = [
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                    'createBy' => 'registration',
                ];
                $user = User::create($creadentials);
                try {
                    $code = Activation::create([
                        'user_id' => $user->id,
                        'code' => Str::random(64),
                        'completed' => 0,
                    ]);
                    $sent = Mail::send(
                        'auth.email.activate',
                        compact('user', 'code'),
                        function ($mail) use ($user) {
                            $mail->to($user->email)->subject('Active your account');
                        }
                    );
                    DB::commit();
                    Session::flash('msg', 'Send mail success!');
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
        $active = Activation::where('user_id', $userId)->where('code', $code)->first();
        $active->completed = 1;
        $active->completed_at = now();
        if ($active->save()) {
            Session::flash('msg', 'Active success!');
            return redirect()->route('login');
        } else {
            Session::flash('err', 'Active failed!');
            return redirect()->route('register.form');
        }
    }
}
