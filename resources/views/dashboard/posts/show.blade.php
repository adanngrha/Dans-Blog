@extends('dashboard.layouts.main')

@section('container')
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" class="card-img-top img-fluid mt-1 mb-1" alt="{{ $post->title }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/dashboard/posts">Back to Blogs</a>
            </div>
        </div>
    </div>
@endsection
