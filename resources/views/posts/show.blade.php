@extends('layouts.app')

@section('content')
    <h2><a href="/blog">Go back</a></h2>
    <hr>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->created_at }}</p>
    <hr>
    <img src="{{ $post->background }}" witdh="500px">
    <p>{{ $post->body }}</p>
@endsection