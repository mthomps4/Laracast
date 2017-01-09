<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpost;
use DB;


class blogpostsController extends Controller
{
    //
    public function store(Request $request)
    {
      $post = new blogpost();
      $post->title = $request->title;
      $post->body = htmlentities($request->body);
      // $card->created_at = new DateTime;
      // $card->updated_at = new DateTime;

      $post->save();

      return back();
    }


    public function index()
    {
      $posts = blogpost::All();
      return view('blog.index', compact('posts'));
    }

    public function show(blogpost $blogpost)
    {
      //if not passing full card into show
      // $blogpost = blogpost::with('comments')->find(1); //get card with notes releationship also with user relationship
      // return $blogpost;

      $blogpost->load('comments');
      
      return view('blog.post', compact('blogpost'));
    }
}
