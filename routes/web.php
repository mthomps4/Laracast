<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function(){
//   $people = ['matt', 'tom'];
//   return view('pages.about', ['people'=>$people]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/cards', 'CardsController@index');
Route::get('/cards/{card}', 'CardsController@show');
Route::post('cards/{card}/notes', 'NotesController@store'); //cardsController@addNote or NotesController@store or CardsNotesController@store
//Full card is passed in above as wildcard {card}
Route::post('cards', 'CardsController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');
