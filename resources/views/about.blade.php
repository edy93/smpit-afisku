@extends('layout.main')
@section('boddy')
<h1>halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $images }}" alt="{{ $name }}"" width="200" class="img-thumbnail rounded-circle">
@endsection