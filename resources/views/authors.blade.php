@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Authors Page</h1>
    @foreach ($authors as $author)
        <article class="">
            <h3>
                <li>
                <a href="/authors/{{ $author->username }}">{{ $author->name }}</a>
                </li>
            </h3>
        </article>
    @endforeach

@endsection
