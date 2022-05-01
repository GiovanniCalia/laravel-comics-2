@extends('guest.template.altraPagina')

@section('title', 'Comic')

@section('content')
    <h1>{{ $cards['title'] }}</h1>
    <h2>{{ $cards['description'] }}</h2>
    <p>{{ $cards['type'] }}</p>
@endsection
