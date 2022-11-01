@extends('layout.main')


@section('boddy')
<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    <p>By: Sandika Galih in {{  $post->categori->name  }}</p>
    {!! $post->body !!}
</article>
<a href="/post">back to post</a>
@endsection