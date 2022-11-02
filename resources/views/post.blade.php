@extends('layout.main')


@section('boddy')
<article>
    <h2 class="mb-5">{{ $posts->title }}</h2>
    <p>By: Sandika Galih in <a href="{{  $post->categori->name  }}">{{ $post->title }}</a></p>
    {!! $post->body !!}
</article>
<a href="/post">back to post</a>
@endsection