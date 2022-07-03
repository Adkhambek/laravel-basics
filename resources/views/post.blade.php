@extends('layout')

@section('content')

    <article>
        <h1>{{$post["title"]}}</h1>
        <div>
          By <a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->id}}" >{{$post->category->name}}</a>
        </div>
        {!! $post["body"] !!}
        <div>
            <a href="/">Go back</a>
        </div>

    </article>

@endsection
