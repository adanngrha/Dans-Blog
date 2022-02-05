@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Categories Page</h1>
    @foreach ($categories as $category)
        <article class="">
            <h3>
                <li>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </li>
            </h3>
        </article>
    @endforeach

@endsection
