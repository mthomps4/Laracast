@extends('layout.mainLayout')
@section('content')
  <h1> Cards </h1>

  @foreach($cards as $card)
    <div>
      {{$card->title}}
    </div>

  @endforeach
@stop
