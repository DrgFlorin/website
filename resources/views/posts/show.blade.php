@extends('layouts.app')

@section('content')
    <h2><a href="/blog">Go back</a></h2>
    <hr>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->created_at }}</p>
    <hr>
    <img src="{{ $post->background }}" width="1000px">
    <p>{!! $post->body !!}</p>
@endsection