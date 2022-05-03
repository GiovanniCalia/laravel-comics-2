@extends('guest.template.linkPagina')

@section('title', 'Comic')

@section('content')
    <a href="{{ route('home') }}">Torna alla home</a>
    <h1>{{ $selectedCard['title'] }}</h1>
    <h2>{{ $selectedCard['description'] }}</h2>
    <p>{{ $selectedCard['type'] }}</p>
@endsection

