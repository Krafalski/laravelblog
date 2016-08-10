@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1> {{$post->title}} </h1>
    <h2> {{$post->post}}</h2>
    <h3> {{$post->created_at}} </h3>
    @foreach ($post->comments as $comment)
      <h6> {{ $comment->commentator }}</h6>
      <h5> {{ $comment->comment }}</h5>
    @endforeach
    <h4><a href="/posts"> Back to Posts </a></h4>
    <h3> Add a new comment</h3>
    <form method="POST" action="/posts/{{ $post->id }}/comment">
      <div class="form-group">

        <!-- <h4> Your name:</h4><input type="hidden" class="form-control" name="commentator" value="Karolin"></input> -->
        <h4> Your comment:</h4><textarea class="form-control" name="comment"></textarea>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button type="submit" class="btn btn-primary">Add comment</button>
    </form>


  </div>
  </div>

@stop
