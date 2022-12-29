<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Email extends Controller
{
    //
    public static function checkEmail($email){
        $user = User::Select('id')->where('email', $email)->first();
        if(isset($user['id'])){
            return true;
        }
        return false;
    }
}
