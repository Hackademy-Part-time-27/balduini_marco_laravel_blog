<x-layout :title="$anime['title']">
    <h1>{{ $anime['title'] }}</h1>
    <h2>{{ $anime['title_japanese'] }}</h2>

    <div>
        <iframe width="560" height="315" src="{{ $anime['trailer']['embed_url']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div>
        Punteggio: <strong>{{ $anime['score'] }}</strong>
    </div>
</x-layout>