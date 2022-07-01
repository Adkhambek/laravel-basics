@extends('layout')

@section('content')

    <article>
        <h1>{{$post["title"]}}</h1>
        <div>
            <a href="/categories/{{$post->category->id}}" >{{$post->category->name}}</a>
        </div>
        {!! $post["body"] !!}
        <a href="/">Go back</a>
    </article>

@endsection
