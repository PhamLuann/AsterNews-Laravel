<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(){
        return view('admin.create-user');
    }
    public function postCreate(Request $request){
        $user = [
            'name' => $request->get('name'),
            'email' =>$request->get('email'),
            'password' => $request->get('password'),
        ];
        $role_id = $request->get('role');
        $create = Sentinel::registerAndActivate($user);
        $roleUser = Sentinel::findRoleById($role_id);
        $roleUser->users()->attach($create);
        if($create){
            return redirect(route('admin.home'));
        }else{
            return redirect(route('user.create'));
        }
    }
    public function update($id){
        $user = User::find($id);
        $role = Role::select(['roles.name as name'])->join('role_users', 'role_users.role_id', 'id')->where('user_id', $id)->first();
        return view('admin.update-user', compact('user', 'role'));
    }
    public function postUpdate(Request $request){
        $user = User::find($request->get('id'));
        if($user){
            $user->name = $request->get('name');
            $user->password = $request->get('password');
            $role = DB::table('role_users')
                ->where('user_id', $request->get('id'))
                ->update([
                'role_id' => $request->get('role'),
            ]);
            if ($user->save() && $role){
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
