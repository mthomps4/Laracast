<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['body', 'user_name'];//Only body can be filled and changed by the form

    public function blogpost()
    {
      return $this->belongsTo(blogpost::class);
    }
}
