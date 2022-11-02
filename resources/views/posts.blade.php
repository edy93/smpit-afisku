

@extends('layout.main')
@section('boddy')

<h1 class="mb-5"> Halaman Blog Post</h1>
    @foreach ($posts as $post)   
    <article class="mb-5">
        <h2><a href="/posts/{{ $post->slug }}">{{$post->title}}</a></h2>
       {{ $post->exerpt}}
    </article>
    @endforeach
@endsection