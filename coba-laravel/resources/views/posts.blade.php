@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
     <article class="mb-5 border-bottom pb-4">
        <h2><a href="/blog/{{ $post['slug'] }}" class="text-decoration-none">{{ $post['title'] }}</a></h2>
        <p>by. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        <!-- <h5>By :{{ $post['author'] }}</h5> -->
        <p>{!! $post['excerpt'] !!}</p>   

        <a href="/blog/{{ $post['slug'] }}" class="text-decoration-none">Read More...</a>

     </article>

    @endforeach

@endsection
