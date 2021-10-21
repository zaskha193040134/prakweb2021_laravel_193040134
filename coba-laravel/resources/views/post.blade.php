
@extends('layouts/main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>by. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog" class="d-block text-decoration-none mt-3">Back to Posts</a>

@endsection