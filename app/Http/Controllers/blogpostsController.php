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
      $post->save();

      //Tags
      //$masterTagList = Tag::All()->pluck('name');
      $masterTagList = Tag::All();
      //New Blog Post Tag Requests
      $tagInput = $request->tags;
      $tagInput = strtolower($tagInput);

      $NewPostTags = explode('#', $tagInput);
      $NewPostTags = array_filter($NewPostTags);
      $NewPostTags = array_map('trim', $NewPostTags);

      foreach($NewPostTags as $Tag){
          $TagEntry = Tag::firstOrNew(['name' => $Tag]);
          $TagEntry->tagCount += 1;
          echo $TagEntry;
          $TagEntry->save();
          echo "<br />";
          echo "<br />";
          echo "<br />";
          $post->tags()->attach($TagEntry);
      }

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
      $blogpost->load('tags');
      return view('blog.post', compact('blogpost'));
    }

    public function getByTag(Tag $tag)
    {
        echo $tag;
        $tagSearch = Tag::find($tag->id);
        return $tagSearch;
        var_dump($tagSearch->blogposts);
        return 2+2;
    }

}
