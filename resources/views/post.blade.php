

@extends('layout.main')
@section('boddy')
    @foreach ($posts as $post)
    <article class="mb-5">
        
        <h2>
            <a href="/posts/{{ $post["id"] }}">{{$post->title}}</a> 
        </h2>
       {{ $post->exerpt}}
    </article>
    @endforeach
@endsection