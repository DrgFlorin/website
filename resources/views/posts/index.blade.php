@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post) 
            <h2><a href="/blog/{{$post->id}}">{{$post->title}}</a></h2>
            <small>{{$post->created_at}}</small><br>
            <img src="{{$post->background}}" width="200px">
            <hr>
        @endforeach
        {{$posts->links()}} 
    @else
        <h2>No posts found</h2>
    @endif
@endsection