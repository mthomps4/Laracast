@extends('layout.mainLayout')
@section('content')
  <h1> Blog Posts </h1>

  @foreach($posts as $post)
    <div>
    <h3>
      <a href="<?php echo "post/" . $post->id ?>">  {{$post->title}}</a>
    </h3>

    <?php
    //  echo html_entity_decode($post->body);
    ?>

    {!! html_entity_decode($post->body) !!}

    </div>

  @endforeach

@stop
