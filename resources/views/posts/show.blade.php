@extends('layouts.master')

<h2>{{$post->title}}</h2>

<span>{{$post->created_at->toDayDateTimeString()}}</span>

<p>{{$post->body}}</p>


<hr>


@foreach($post->comments as $comment)

    <div><b>{{$comment->created_at->toFormattedDateString()}}: </b>{{$comment->comment}}</div>

    <br>

@endforeach

<hr>


<h2>Add comemnt</h2>

<form action="/posts/{{$post->id}}/comments" method="post">

    {{ csrf_field() }}

    <textarea name="comment" id="content" cols="30" rows="10" required></textarea>

    <br>

    <input type="submit">

</form>

@include('layouts.form-errors')


