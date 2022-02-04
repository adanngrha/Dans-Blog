@extends('layouts.main')

@section('container')

    <h1>Halaman Blogs</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
        <h2>
            <a href="/blog/{{ $post["slug"] }}">{{ $post['title'] }}</a>
        </h2>
        <h3>By: {{ $post['author'] }}</h3>
        <p>
            {{ $post['body'] }}
        </p>
        </article>
    @endforeach

@endsection
