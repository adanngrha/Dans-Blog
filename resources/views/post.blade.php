@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>
                    By: <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in
                    <a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>

                <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" class="card-img-top img-fluid mt-1 mb-1" alt="{{ $post->title }}">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blogs">Back to Blogs</a>
            </div>
        </div>
    </div>

    <article>

    </article>



@endsection
