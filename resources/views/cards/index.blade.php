@extends('layout.mainLayout')
@section('content')
  <h1> Cards </h1>

  @foreach($cards as $card)
    <div>
    <a href="<?php echo "cards/" . $card->id ?>">  {{$card->title}}</a>
    </div>

  @endforeach
@stop
