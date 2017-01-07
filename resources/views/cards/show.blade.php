@extends('layout.mainLayout')
@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h1> {{ $card->title}}</h1>
    <ul class="list-group">
        @foreach($card->notes as $note)
        <li class="list-group-item container">
            <div class="row">
              <p class="col-xs-6 col-sm-8 col-lg-9"> {{$note->user->username}}:  {{$note->body}} </p>
                  <a roll="button" href="/notes/{{$note->id}}/edit" class="btn btn-warning col-xs flex-xs-middle">   <span class="fa fa-pencil-square-o" aria-hidden="true"></span> </a>
                  <a roll="button" href="" class="btn btn-danger col-xs flex-xs-middle deleteButton"> <span class="fa fa-trash-o" aria-hidden="true"></span> </a>
            </div>
          </li>
        @endforeach
      </ul>

      <!-- cards/3/notes/1/edit long and annoying ... maybe /notes/1/edit -->

      <hr>
      <div class=container>
        <h3> Add a New Note </h3>

        <form method="post" action="/cards/{{$card->id}}/notes">
          <div class="form-group row">
            <textarea name="body" class="form-control"> </textarea>
          </div>

          <div class="form-group row flex-items-xs-right">
            <button type="submit" class="btn btn-primary ">Add Note</button>
          </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </form>
      </div>
<!-- can submit to /notes and pass in hidden input with id or post to cards/id/notes  -->

    @if (count($errors))
      <ul>
        @foreach($errors->all() as $error)
          <li> {{$error}} </li>
        @endforeach
      </ul>
    @endif


  </div>
  </div>
@stop
