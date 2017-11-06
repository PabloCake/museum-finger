<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        //return User::all();//todos los usuarios
       // return ('usuarios');
        $users= User::all();
        return view("users.index")->with('users',$users);
    }
}