<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\RegisterRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function changeName()
    {
        $user = Auth::user();
        return view('user.change_name', compact('user'));
    }

    public function doChangeName(UpdateUserRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->get('name');
        $user->updateBy = $request->get('name');
        if ($user->save()) {
            return redirect()->route('user.profile')->with('msg', 'Update Success!');
        }
        return redirect()->back()->withInput()->with('err', 'Cannot Update!');
    }

    public function changePassword()
    {
        $user = Auth::user();
        return view('user.change_password', compact('user'));
    }

    public function doChangePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        if (Hash::check($request->get('current-password'), $user->password)) {
            $user->password = Hash::make($request->get('new-password'));
            $user->updateBy = $user->name;
            if ($user->save()) {
                return redirect()->route('user.profile')->with('msg', 'Change password success!');
            } else {
                Session::flash('err', 'Error!');
                return redirect()->back();
            }
        } else {
            Session::flash('err', 'Current password incorrect!');
            return redirect()->back();
        }
    }
}
