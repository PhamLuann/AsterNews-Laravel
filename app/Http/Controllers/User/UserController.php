<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function update($id){
        $user = Sentinel::findUserById($id);
        return view('auth.update-user', compact('user'));
    }

    public function postUpdate(RegisterRequest $request){
        $request->offsetSet('updateBy', 'User');
        $user = Sentinel::findUserById($request->get('id'));
        if(Sentinel::update($user, $request->all())){
            return redirect(route('home'))->with('msg', 'Update success!');
        }
        return redirect()->back()->with('msg', 'Update Err!');
    }
}
