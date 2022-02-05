@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Author : {{ $author }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5 pb-4 border-bottom">
        <h2> {{ $post->title }} </h2>
        <p>
            {{ $post->excerpt }}
        </p>

        <a href="/blog/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach

@endsection
