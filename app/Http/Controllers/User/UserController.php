<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UpdateUserRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class UserController extends Controller
{
    //
    public function update($id){
        $user = Sentinel::findUserById($id);
        return view('auth.update-user', compact('user'));
    }

    public function postUpdate(UpdateUserRequest $request){
        $input = [
            'name' => $request->get('name'),
            'updateBy' => 'User',
        ];
        if($request->get('password')!= null){
            $input['password'] = $request->get('password');
        }
        $user = Sentinel::findUserById($request->get('id'));
        if(Sentinel::update($user, $input)){
            return redirect(route('home'))->with('msg', 'Update success!');
        }
        return redirect()->back()->with('msg', 'Update Err!');
    }
}
