@extends('layout')

@section('content')
  <h1> {{$post->title}} </h1>
  <h2> {{$post->post}}</h2>
  <h3> {{$post->created_at}} </h3>
  <h4><a href="/posts"> Back to Posts </a></h4>
@stop
