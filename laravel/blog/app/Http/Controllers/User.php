<?php

namespace App\Http\Controllers;

use App\User as AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    public function listUser()
    {
        $user = new AppUser();
        $user->name = 'admin';
        $user->email = 'oscarkaka222@gmail.com';
        $user->password = Hash::make('admin');
        $user->save();

        echo $user;
    }
}
