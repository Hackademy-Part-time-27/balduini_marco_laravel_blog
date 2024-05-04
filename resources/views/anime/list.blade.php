<x-layout title="Anime">
    <h1>Anime</h1>

    <div class="mt-5">
        @foreach($anime as $anime)
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <img class='img-fluid' src="{{ $anime['images']['jpg']['small_image_url'] }}" alt="{{ $anime['title']}}">
                    </div>
                    <div class="col-lg-9">
                        <h5>{{ $anime['title'] }} [{{ $anime['year'] }}]</h5>   

                        <div class="mt-5 text-end">
                            <a href="{{ route('anime.show', $anime['mal_id']) }}">Più info...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>