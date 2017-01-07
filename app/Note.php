<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //

    protected $fillable = ['body'];//Only body can be filled and changed by the form

    public function card()
    {
      return $this->belongsTo(Card::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
