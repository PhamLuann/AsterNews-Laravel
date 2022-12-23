<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('admin.create-user');
    }
    public function postCreate(Request $request){
        $user = $request->all();
        if(User::create($user)){
            return redirect(route('admin.home'));
        }else{
            return redirect(route('user.create'));
        }
    }
    public function update($id){
        $user = User::find($id);
        return view('admin.update-user', compact('user'));
    }
    public function postUpdate(Request $request){
        $user = User::find($request->get('id'));
        if($user){
            $user->name = $request->get('name');
            $user->password = $request->get('password');
            $user->role = $request->get('role');
            if ($user->save()){
                return redirect(route('admin.home'))->with('msg', 'Update Success!');
            }
        }
    }
    public function destroy(Request $request){
        $id = $request->get('id');
        if($id){
            User::destroy($id);
            return redirect(route('admin.home'))->with('msg', 'Delete user id '. $id .' Success!');
        }
    }
}
