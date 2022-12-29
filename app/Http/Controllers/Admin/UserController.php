<?php

namespace App\Http\Controllers\Admin;
session_start();

use App\Http\Controllers\Controller;
use App\Http\Controllers\Email;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Roles\EloquentRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(){
        return view('admin.create-user');
    }
    public function postCreate(RegisterRequest $request){
        $request->offsetSet('createBy', $_SESSION['name']);
        if(Email::checkEmail($request->get('email'))){
            return redirect()->back()->withInput()->with('emailErr', 'Email is already exist!');
        }
        $role_id = $request->get('role');
        $create = Sentinel::registerAndActivate($request->all());
        $roleUser = Sentinel::findRoleById($role_id);
        $roleUser->users()->attach($create);
        if($create){
            return redirect(route('admin.home'));
        }else{
            return redirect()->back()->withInput();
        }
    }
    public function update($id){
        $user = Sentinel::findUserById($id);
        $role = Role::select(['roles.name as name'])->join('role_users', 'role_users.role_id', 'id')->where('user_id', $id)->first();
        return view('admin.update-user', compact('user', 'role'));
    }
    public function postUpdate(UpdateUserRequest $request){
        $input = [
            'name' => $request->get('name'),
            'updateBy' => $_SESSION['name'],
        ];
        if($request->get('password') != null){
            $input['password'] = $request->get('password');
        }
        $userId = $request->get('id');
        $user = Sentinel::findUserById($userId);
        if($user){
            Sentinel::update($user, $input);
            $role = DB::table('role_users')
                ->where('user_id', $userId)
                ->update([
                'role_id' => $request->get('role'),
            ]);
            return redirect(route('admin.home'))->with('msg', 'Update Success!');
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
