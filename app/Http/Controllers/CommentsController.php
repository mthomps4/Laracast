<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpost;
use App\comment;

class CommentsController extends Controller
{
    protected $fillable = ['body', 'user_name'];

    public function store(Request $request, blogpost $blogpost)      //Card Id has been passed so you can pass in full card.
    {
      $this->validate($request, [
        'body'=> 'required', //'email' => 'email|unique:users'
        'user_name' => 'required'
      ]);

      $comment = new Comment($request->all());
      $blogpost->addComment($comment);
      return back(); //returns back to cards/1
    }
}
