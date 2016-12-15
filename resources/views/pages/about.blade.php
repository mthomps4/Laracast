@extends('layout.mainLayout')
@section('content')
<div class="about">
<h1> About Page </h1>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h3> vanilla php foreach </h3>
<?php
foreach($people as $person){
  echo $person;
  echo "<br>";
}
?>

<h3> blade foreach </h3>
<p>Dogs:</p>
  @if (empty($dog))
  <p> There are no Dogs</p>
  @endif

<p>People:</p>
  @foreach($people as $person)
    {{$person}} <br>
  @endforeach
</div>
@stop
