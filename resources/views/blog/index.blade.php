@extends('layout.mainLayout')
@section('content')
  <h1> Blog Posts
  <?php
    if(isset($tagName)){
      echo "-  #";
      echo $tagName;
    }

    if(isset($CategoryName)){
      echo "-  #";
      echo $CategoryName;
    }
   ?>
   </h1>
  @foreach($posts as $post)
    <div>
    <h3>
      <a href="<?php echo "/" . "post/" . $post->id ?>">  {{$post->title}}</a>
    </h3>

    <?php
    //  echo html_entity_decode($post->body);
    ?>

    <!-- {!! html_entity_decode($post->body) !!} -->
    </div>
  @endforeach

  <div>
  <h4> Tag List  </h4>
    <?php
      foreach($post->tags as $tag){
        echo "<a href='/tag/$tag->id/posts/'>";
        echo "#";
        echo $tag->name;
        echo "</a>";
        echo "(" . $tag->tagCount . ")";
        echo "<br />";
      }
     ?>
  </div>

  <div>
  <h4> Category List  </h4>
    <?php
      foreach($post->categories as $category){
        echo "<a href='/category/$category->id/posts/'>";
        echo "#";
        echo $category->name;
        echo "</a>";
        echo "(" . $category->categoryCount . ")";
        echo "<br />";
      }
     ?>
  </div>


  <div>
     <h4>Blog Archive</h4>

<!-- <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div> -->

     <!-- @foreach($postsByDate as $post)
       <p><b>{{$post->title}}</b>
       {{$post->created_at->format('F-d-Y')}}</p>
     @endforeach -->

     @foreach ($posts_by_date as $date => $posts)
     <div class="btn-group">
       <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ $date }}
       </button>
       <div class="dropdown-menu">
         @foreach ($posts as $post)
           <a class="dropdown-item" href="/post/{{$post->id}}">{{ $post->title }}</a>
         @endforeach
       </div>
       </div>
     @endforeach


  </div>


@stop
