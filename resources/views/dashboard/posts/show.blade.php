@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" class="card-img-top img-fluid mt-1 mb-1" alt="{{ $post->title }}">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blogs">Back to Blogs</a>
            </div>
        </div>
    </div>
@endsection
