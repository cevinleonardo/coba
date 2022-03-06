@extends('layouts.main')


@section('container')
 
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="public/img/{{ $image }}" alt="{{ $name }}" style="width: 200px; height: 200px" class="img-thumbnail rounded-circle">

@endsection