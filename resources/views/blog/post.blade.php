@extends('layout.mainLayout')
@section('content')
  <h1> {{$blogpost->title}}</h1>

    <?php
    //  echo html_entity_decode($post->body);
    // var_dump($blogpost);
    ?>

    {!! html_entity_decode($blogpost->body) !!}

    <h3>Comments:</h3>
    @foreach($blogpost->comments as $comment)
      <ul>
        <li>{{$comment}}</li>
      </ul>
    @endforeach


    <hr>
    <div class=container>
      <h3> Comment Below: </h3>

      <form method="post" action="/post/{{$blogpost->id}}/comment">
        <div class="form-group row">
          <label for="user_name">Name:</label>
          <input class="form-control" name="user_name" />
        </div>

        <div class="form-group row">
          <textarea name="body" class="form-control"> </textarea>
        </div>

        <div class="form-group row flex-items-xs-right">
          <button type="submit" class="btn btn-primary ">Add Comment</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

      </form>
    </div>

@stop
