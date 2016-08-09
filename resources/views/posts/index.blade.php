@extends('layout')

@section('content')
 <h1> All Posts </h1>
 @foreach($posts as $post)
  <div>
  <a href="/posts/{{$post->id}}">  {{$post->title}}</a>
    <br>
    {{$post->post}}
  </div>
 @endforeach
@stop
