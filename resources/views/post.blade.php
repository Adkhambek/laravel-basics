@extends('layout')

@section('content')

    <article>
        <h1>{{$post["title"]}}</h1>
        {!! $post["body"] !!}
        <a href="/blog">Go back</a>
    </article>

@endsection
