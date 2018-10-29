@extends('layouts.master')

@section('content')
    <h1>Create Posts</h1>

    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <label>Title</label>

        <input type="text" name="title" id="title">

        <label>body</label>

        <input type="text" name="body" id="body">

        <button type="submit">Publicar</button>

    </form>
@include('layouts.form-errors')

@endsection
