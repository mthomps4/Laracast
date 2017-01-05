@extends('layout.mainLayout')
@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1> {{ $card->title}}</h1>
      <ul class="list-group">
        @foreach($card->notes as $note)
          <li class="list-group-item"> Note: {{$note->body}} </li>
        @endforeach
      </ul>

      <hr>

        <h3> Add a New Note </h3>

        <form method="post" action="/cards/{{$card->id}}/notes">
          <div class="form-group">
            <textarea name="body" class="form-control"> </textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Note</button>
          </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </form>
<!-- can submit to /notes and pass in hidden input with id or post to cards/id/notes  -->

  </div>
  </div>
@stop
