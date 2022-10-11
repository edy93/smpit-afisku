@extends('layout.main')


@section('boddy')
<article>
    <h2>{{ $post->title }}</h2>
    <p>{!! $post->body !!}</p>
</article>
<a href="/post">back to post</a>
@endsection