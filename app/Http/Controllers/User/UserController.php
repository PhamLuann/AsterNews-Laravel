<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\RegisterRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile()
    {
        $user = Sentinel::getUser();
        return view('user.profile', compact('user'));
    }

    public function changeName()
    {
        $user = Sentinel::getUser();
        return view('user.change_name', compact('user'));
    }

    public function doChangeName(UpdateUserRequest $request){
        $user = Sentinel::getUser();
        $input = [
            'name' => $request->get('name'),
        ];
        if(Sentinel::update($user, $input)){
            return redirect()->route('user.profile')->with('msg', 'Update Success!');
        }
        return redirect()->back()->withInput()->with('err', 'Cannot Update!');
    }

    public function changePassword(){
        $user = Sentinel::getUser();
        return view('user.change_password', compact('user'));
    }

    public function doChangePassword(ChangePasswordRequest $request){
        $user = Sentinel::getUser();
        $credentials = [
            'email' => $user->email,
            'password' => $request->get('current-password'),
        ];
        if(Sentinel::validateCredentials($user, $credentials)){
            $credentials['password'] = $request->get('new-password');
            Sentinel::update($user, $credentials);
            return redirect()->route('user.profile')->with('msg', 'Change password success!');
        }else{
            Session::flash('err', 'Current password incorrect!');
            return redirect()->back();
        }
    }
}
