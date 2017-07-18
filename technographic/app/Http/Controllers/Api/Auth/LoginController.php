<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login(Request $request){
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required'
    ]);

    $_userdatas = array(
    		'email'    => $request['email'],
    		'password' => $request['password']
    	);
      if(Auth::attempt($_userdatas))
      		return response()->json(['message'=> 'Login Success', 'code'=> '200']);
      	return response()->json(['message'=> 'Email and password does not match.', 'code'=> '401']);
  }
}
