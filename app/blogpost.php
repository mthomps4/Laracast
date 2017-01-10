<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogpost extends Model
{
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function addComment(Comment $comment) //Would hard code User $user
  {
    return $this->comments()->save($comment);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class, 'blogpost_tag', 'blogpost_id', 'tag_id')->withTimestamps();
  }

}
