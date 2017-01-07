<?php

namespace App\Http\Controllers;

//use DB;DB::table('cards')->get();
use DB;
use App\Card; //
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
      $cards = Card::All();
      return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {

      // Pre User Card INfo
      // $card = Card::find($id);

      //if not passing full card into show
      // $card = Card::with('notes.user')->find(1); //get card with notes releationship also with user relationship
      // return $card;

      $card->load('notes.user');
      return view('cards.show', compact('card'));
    }

    public function store(Request $request)
    {
      $card = new Card();
      $card->title = $request->title;
      // $card->created_at = new DateTime;
      // $card->updated_at = new DateTime;

      $card->save();

      return back();
    }
}
