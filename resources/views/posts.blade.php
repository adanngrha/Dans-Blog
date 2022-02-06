@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Blogs Page</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="/posts">

            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->title }}">
        <div class="card-body text-center">
            <h3 class="card-title"><a class="text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
            <p>
                <small>
                    <p>
                    By: <a href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in
                    <a href="/categories/{{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->name }}
                    </a> {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                </small>
            </p>
            <a class="btn btn-primary text-white" href="/blog/{{ $posts[0]->slug }}">Read more</a>
        </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                <div class="position-absolute px-3 py-2 rounded-3" style="background-color: rgba(0, 0, 0, 0.5)">
                    <a class="text-white" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5><p>
                        By: <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a class="btn btn-primary text-white" href="/blog/{{ $post->slug }}">Read more</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

@endsection
