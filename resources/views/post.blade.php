@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>
                    By: <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in
                    <a href="/blogs?category={{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" class="card-img-top img-fluid " alt="{{ $post->title }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blogs">Back to Blogs</a>
            </div>
        </div>
    </div>

@endsection
