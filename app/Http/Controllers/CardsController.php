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

    public function show($id)
    {
      $card = Card::find($id);
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
