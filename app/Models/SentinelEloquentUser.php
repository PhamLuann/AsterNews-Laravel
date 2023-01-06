<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SentinelEloquentUser extends EloquentUser
{
    protected $fillable = [
        'email',
        'password',
        'name',
        'auth_id',
        'updateBy',
        'createBy',
        'permissions',
    ];
}
