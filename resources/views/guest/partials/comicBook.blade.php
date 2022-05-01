<main>
    @foreach ($cards as $card)
        <h1>{{ $card['title'] }}</h1>
        <h2>{{ $card['description'] }}</h2>
        <p>{{ $card['type'] }}</p>
    @endforeach

    <h1>ciao</h1>
    <p><a href="{{ route('home') }}">Torna alla pagina principale</a></p>
</main>