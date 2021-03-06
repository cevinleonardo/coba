@extends('layouts.main')


@section('container')

<h1 class="mb-5">Halaman Post</h1>

    @foreach ($posts as $post)

    <article class="mb-3">
        <h2>
            <a href="{{ url('/posts') }}/{{ $post['slug'] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    @endforeach

@endsection