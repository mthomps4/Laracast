<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Card;
use App\Note;


class NotesController extends Controller
{
    protected $fillable = ['body'];
    public function store(Request $request, Card $card)      //Card Id has been passed so you can pass in full card.

    {
      $this->validate($request, [
        'body'=> 'required' //'email' => 'email|unique:users'
      ]);


      $note = new Note($request->all());
      // $note->body = $request->body;
      $card->addNote($note, 1); // 1 = hardcoded user Id Auth::user(id);
      //$card->notes()->save($note); //This will save the new note to the Card that was passed through no id matching needed.
      //
      // $card->notes()->save(new Note(['body' => $request->body]));
      // return redirect()-to(...)
      return back(); //returns back to cards/1
    }

    public function edit(Note $note)
    {
      return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
      $note->update($request->all()); //Update everything except token
      $url = '/cards' . '/' . $note->card_id; //redirects to Card note is from
      return redirect()->to($url);
    }
}
