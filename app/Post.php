<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $fillable = [
    'user_id', 'title', 'content',
  ];

  public function images(){
    $this->hasMany(Image::class);
  }

  public function user(){
    $this->belongsTo(User::class);
  }
}
