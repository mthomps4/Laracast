<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpost;
use App\tag;
use DB;


class blogpostsController extends Controller
{
    //
    public function store(Request $request)
    {
      $post = new blogpost();
      $post->title = $request->title;
      $post->body = htmlentities($request->body);

      //Tags
      //$masterTagList = Tag::All()->pluck('name');
      $masterTagList = Tag::All();
      //New Blog Post Tag Requests
      $tagInput = $request->tags;
      $tagInput = strtolower($tagInput);

      $NewPostTags = explode('#', $tagInput);
      $NewPostTags = array_filter($NewPostTags);
      $NewPostTags = array_map('trim', $NewPostTags);

      return 2+2;

      foreach($NewPostTags as $Tag){
          //firstOrCreate
          //firstOrNew
          //updateOrCreate
          //https://laravel.com/docs/5.3/eloquent
      }

      //Check if Tag Exists
        //IF Update Tag Count
        //Else create Tag Count = 1
      //Add to Tag List
      //Attatch Tags to Blogpost
      
      //$post->tags->attach($tags);

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
      $blogpost->load('comments');

      return view('blog.post', compact('blogpost'));
    }
}
