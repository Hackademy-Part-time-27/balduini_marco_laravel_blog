<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    const BASE_URL = 'https://api.jikan.moe/v4/';

    public function genres()
    {
        $url = self::BASE_URL . 'genres/anime';

        $genres = Http::get($url)->json();

        return view('anime.genres', ['genres' => $genres['data']]);
    }

    public function anime($genre_id)
    {
        $url = self::BASE_URL . 'anime';

        $anime = Http::get($url, ['genres' => $genre_id])->json();

        return view('anime.list', ['anime' => $anime['data']]);

    }

    public function animeShow($anime_id)
    {
        $url = self::BASE_URL . 'anime/' . $anime_id;

        $anime = Http::get($url)->json();

        return view('anime.show', ['anime' => $anime['data']]);

    }
}
