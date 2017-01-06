@extends ('layout.mainLayout')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
  <h1> Edit Note </h1>

  <form method="POST" action="/notes/{{$note->id}}">
    <!-- {{method_field('patch')}} -->
    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">
      <textarea name="body" class="form-control">{{$note->body}}</textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update Note</button>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

</div>
</div>

@stop
