@extends('layout')

@section('content')

    @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{$post["id"]}}">{{$post["title"]}}</a></h1>
            <div>
                <a href="/categories/{{$post->category->id}}" >{{$post->category->name}}</a>
            </div>
            {!!$post["body"]!!}

        </article>
    @endforeach

@endsection
