@extends('layouts.main')

@section('container')

    <h1>Categories Page</h1>
    @foreach ($categories as $category)
        <article class="">
            <h2>
                <li>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </li>
            </h2>
        </article>
    @endforeach

@endsection
