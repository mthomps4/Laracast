<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tag;

class tagsController extends Controller
{
    //

    public function getByTag(Tag $tag)
    {
        $tagSearch = Tag::find($tag->id);
        $posts = $tagSearch->blogpost;
        $tagName = $tag->name;
        return view('blog.index', compact('posts', 'tagName'));
    }
}
