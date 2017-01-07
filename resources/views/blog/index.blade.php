@extends('layout.mainLayout')
@section('content')
  <h1> Blog Posts </h1>

  @foreach($posts as $post)
    <div>
    <h1> {{$post->title}}</h1>

    <?php
      echo html_entity_decode($post->body);
    ?>

    {{!! html_entity_decode($post->body) !!}}

    </div>

  @endforeach

@stop
