@extends('layouts.master')


@section('posts')

    <ul>

        @foreach($posts as $post)

                @include('posts.post')

        @endforeach

    </ul>

@endsection


@section('scripts-footers')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/js/function.js">
    </script>
@endsection

