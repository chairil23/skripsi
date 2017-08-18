<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

/**
 *
 */
class UserTransformer extends TransformerAbstract
{

  public function transform(User $user){
    return [
      'name'        => $user->name,
      'email'       => $user->email,
      'password'    => $user->password,
      'reagistered' => $user->created_at->diffForHumans()
    ];
  }
}
