@extends('layouts.master')

<h2>{{$post->title}}</h2>
<span>{{$post->created_at->toDayDateTimeString()}}</span>
<p>{{$post->body}}</p>

