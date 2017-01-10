<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
  protected $fillable = ['name'];

  public function blogpost()
  {
    return $this->belongsToMany(blogpost::class);
  }
}
