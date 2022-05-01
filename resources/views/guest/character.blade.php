@extends('guest.template.linkPagina')

@section('title', 'Comic')

@section('content')
    <a href="{{ route('home') }}">Torna alla home</a>
    <h1>{{ isset($cards['title']) }}</h1>
    <h2>{{ isset($cards['description']) }}</h2>
    <p>{{ isset($cards['type']) }}</p>
@endsection

