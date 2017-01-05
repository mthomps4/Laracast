@extends('layout.mainLayout')
@section('content')
  <h1> {{ $card->title}}</h1>
  <p>
    @foreach($card->notes as $note)
      Note: {{$note->body}} <br>
    @endforeach
  </p>
@stop
