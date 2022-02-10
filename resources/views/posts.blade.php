@extends('layouts.main')

@section('container')

    <h1 class="mb-4 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blogs">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @elseif (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @elseif (request('category') && request('author'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary btn-dark text-white" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                    </div>
                @else
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->title }}">
                @endif
        <div class="card-body text-center">
            <h3 class="card-title"><a class="text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
            <p>
                <small>
                    <p>
                    By: <a href="/blogs?author={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in
                    <a href="/blogs?category={{ $posts[0]->category->slug }}">
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
                    <a class="text-white" href="//blogs?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->title }}">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5><p>
                        By: <a href="/blogs?author={{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/blogs?category={{ $post->category->slug }}">{{ $post->category->name }}</a>, {{ $post->created_at->diffForHumans() }}
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

    <div class="d-flex justify-content-center mb-5">
        {{ $posts->links() }}
    </div>


@endsection

