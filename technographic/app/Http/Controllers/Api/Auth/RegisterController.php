<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function register(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
      ]);

      $user= User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt('password')
      ]);
    }
}
