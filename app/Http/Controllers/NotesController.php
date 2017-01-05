<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Card;
use App\Note;


class NotesController extends Controller
{
    public function store(Request $request, Card $card)      //Card Id has been passed so you can pass in full card.

    {
      $note = new Note;
      $note->body = $request->body;
      $card->notes()->save($note); //This will save the new note to the Card that was passed through no id matching needed.

      // $card->notes()->save(new Note(['body' => $request->body]));
      // return redirect()-to(...)
      return back(); //returns back to cards/1
    }
}
