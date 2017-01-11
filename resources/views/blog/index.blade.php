@extends('layout.mainLayout')
@section('content')
  <h1> Blog Posts
  <?php
    if(isset($tagName)){
      echo "-  #";
      echo $tagName;
    }
   ?>
   </h1>
  @foreach($posts as $post)
    <div>
    <h3>
      <a href="<?php echo "post/" . $post->id ?>">  {{$post->title}}</a>
    </h3>

    <?php
    //  echo html_entity_decode($post->body);
    ?>

    <!-- {!! html_entity_decode($post->body) !!} -->
    </div>
  @endforeach

  <div>
  <h4> Tags List  </h4>
    <?php
      foreach($tags as $tag){
        echo "<a href='/tag/$tag->id/posts/'>";
        echo "#";
        echo $tag->name;
        echo "</a>";
        echo "(" . $tag->tagCount . ")";
        echo "<br />";
      }
     ?>

  </div>


@stop
