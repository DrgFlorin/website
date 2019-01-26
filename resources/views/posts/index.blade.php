@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <h2>{{$post->title}}</h2>
            <small>{{$post->created_at}}</small><br>
            <img src="{{$post->background}}" width="200px">
        @endforeach
    @else
        <h1>No posts found</h1>
    @endif
@endsection