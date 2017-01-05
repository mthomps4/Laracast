@extends('layout.mainLayout')
@section('content')
  <h1> Cards </h1>

  @foreach($cards as $card)
    <div>
    <a href="<?php echo "cards/" . $card->id ?>">  {{$card->title}}</a>
    </div>
  @endforeach

    <hr>

      <h3> Add a New Card </h3>

      <form method="post" action="/cards">
        <div class="form-group">
          <label for="title"> Title: </label>
          <input name="title" class="form-group-item" />
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Note</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

      </form>
@stop
