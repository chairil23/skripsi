<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Transformers\PostTransformer;

class PostController extends Controller
{
    public function add(Request $request, Post $post){
      $this->validate($request, [
        'title' => 'required',
        'content' => 'required|min:20',
      ]);

      $post = $post->create([
        'user_id' => Auth::user()->id,
        'title'   => $request->title,
        'content' => $request->content
      ]);

      $response = fractal()
        ->item($post)
        ->transformWith(new PostTransformer)
        ->toArray();

        return response()->json($response, 201);
    }

    public function update(Request $request, Post $post){

      $post->title  = $request->get('title', $post->title);
      $post->content = $request->get('content', $post->content);
      $post->save();

    }
}
