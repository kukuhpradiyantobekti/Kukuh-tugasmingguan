@extends('layouts.main')

@section('title', 'Berita')

@section('content')
    <h1>berita</h1>
        @foreach ( $beritas as $berita )
        <article class="mb-5">
            <a href="/berita/{{ $berita['slug']}}">
                 <h2>{{ $berita['judul'] }}</h2>
             </a>
             <h3>{{ $berita['penulis'] }}</h3>
            <p>{{ $berita['konten'] }}</p>
            </article>

@endforeach

@endsection