<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function doRegister(Request $request, User $user){
      $this->validate($request, [
        'name'     => 'required',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed'
      ]);

      $user = $user->create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
        'api_token'=> bcrypt($request->email)
      ]);

      $response = fractal()
        ->item($user)
        ->transformWith(new UserTransformer)
        ->addMeta([
          'token' => $user->api_token,
        ])
        ->toArray();

        return response()->json($response, 201);

    }

    public function doLogin(Request $request, User $user){
      $this->validate($request, [
        'email'    => 'required|email',
        'password' => 'required'
      ]);

      if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return response()->json(['error' => 'Your credential is wrong'], 401);
      }

      $user = $user->find(Auth::user()->id);

      return fractal()
        ->item($user)
        ->transformWith(new UserTransformer)
        ->addMeta([
          'token' => $user->api_token,
        ])
        ->toArray();

    }

}
