<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpost;
use App\tag;
use App\category;
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


      //Categories
      $masterCategoryList = Category::All();
      $CategoryInput = $request->categories;
      $CategoryInput = strtolower($CategoryInput);

      $NewPostCategories = explode('#', $CategoryInput);
      $NewPostCategories = array_filter($NewPostCategories);
      $NewPostCategories = array_map('trim', $NewPostCategories);

      foreach($NewPostCategories as $Category){
          $CategoryEntry = Category::firstOrNew(['name' => $Category]);
          $CategoryEntry->categoryCount += 1;
          echo $CategoryEntry;
          $CategoryEntry->save();
          echo "<br />";
          echo "<br />";
          echo "<br />";
          $post->category()->attach($CategoryEntry);
      }

      return back();
    }


    public function index()
    {
      $posts = blogpost::All();
      $tags = tag::All();
      $categories = category::All();
      return view('blog.index', compact('posts', 'tags', 'categories'));
    }

    public function show(blogpost $blogpost)
    {
      $blogpost->load('comments');
      $blogpost->load('tags');
      $blogpost->load('categories');
      return view('blog.post', compact('blogpost'));
    }

}
