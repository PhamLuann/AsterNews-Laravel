<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $users = User::select([
            'users.id',
            'users.name',
            'users.email',
            'users.password',
            'roles.name AS role',
        ])
            ->join('role_users as ru', 'ru.user_id', 'users.id')
            ->join('roles', 'roles.id', 'ru.role_id')
            ->paginate(30);
        return view('admin.index', compact('users'));
    }
}
