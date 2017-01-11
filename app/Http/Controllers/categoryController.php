<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
{
  public function getByCategory(category $category)
  {
      $CategorySearch = category::find($category->id);
      $posts = $CategorySearch->blogpost;
      $CategoryName = $category->name;
      return view('blog.index', compact('posts', 'CategoryName'));
  }
}
