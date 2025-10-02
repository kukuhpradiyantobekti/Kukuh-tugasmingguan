@extends('layouts.main')

@section('content')
      <h1>berita</h1>


        @foreach ($beritas as $berita)
        
        @endforeach
      <h2>{{ $berita['judul'] }}</h2>
      <h3>{{ $berita['judul'] }}</h3>


@endsection