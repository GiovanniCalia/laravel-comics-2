@extends('guest.template.altraPagina')

@section('title', 'Comic')



@section('contenuto')
<a href="{{ route('home') }}">Torna alla pagina principale</a>

    @foreach ($cards as $card)
        <h1>{{ $card['title'] }}</h1>
        <h2>{{ $card['description'] }}</h2>
        <p>{{ $card['type'] }}</p>
    @endforeach

@endsection 
