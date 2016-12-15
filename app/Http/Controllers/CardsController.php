<?php

namespace App\Http\Controllers;

//use DB;DB::table('cards')->get();
use App\Card; //
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
      $cards = Card::All();
      return view('cards.index', compact('cards'));
    }
}
