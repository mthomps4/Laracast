@extends('layout.mainLayout')
@section('content')
  <h1> {{$blogpost->title}}</h1>

    <?php
    //  echo html_entity_decode($post->body);
    ?>

    {!! html_entity_decode($blogpost->body) !!}

    </div>
@stop
