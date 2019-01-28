@extends('layouts.app')

@section('content')
    <h2><a href="/blog">Go back</a></h2>
    <hr>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->created_at }}</p>
    <hr>
    <img src="{{ $post->background }}" width="100%">
    <p>{!! $post->body !!}</p>
    <hr>
    <a href="/blog/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection