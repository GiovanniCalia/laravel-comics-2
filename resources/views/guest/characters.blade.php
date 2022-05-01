@extends('guest.template.linkPagina')

@section('title', 'Comic')

@section('content')
<a href="{{ route('home') }}">Torna alla home</a>

    @foreach ($cards as $card)
        <h1>{{ $card['title'] }}</h1>
        <h2>{{ $card['description'] }}</h2>
        <p>{{ $card['type'] }}</p>
    @endforeach
@endsection

