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

    public function addNote(Note $note, $userID) //Would hard code User $user
    {
      $note->user_id = $userID;
      return $this->notes()->save($note);
    }
}
