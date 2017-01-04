<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //Card has many notes
    public function notes()
    {
      return $this->hasMany(Note::class);
    }
}
