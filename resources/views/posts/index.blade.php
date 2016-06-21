@extends('template')

@section('content')

    <h1>Blog</h1>

    @foreach($posts as $post)
    <h2>{{ $post->title}} </h2>
    <p>{{ $post->content}}</p>
    <b>Tags: </b>
    <ul>
        @foreach($post->tags as $tag)
            <li>{{ $tag->name }}</li>
    </ul>
    @endforeach


        <h3>Comments</h3>
    <ul>
        @foreach($post->comments as $comment)
        <li>  <b>Name: </b>{{ $comment->name }}<br></li>
         <li>   <b>Comment:</b>{{ $comment->comment }}</li>
            @endforeach
    </ul>
        <hr>
    @endforeach
    @endsection