<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
   
    public function welcome()
    {
        $title = config('app.name');
        return view('pages.welcome', compact('title'));
    }
    public function aboutMe()
    {
        return view('pages.about-me', [
            'title' => 'Presentazione',
            'description' => "Sono Marco, vengo da Bari e partecipo all'Hackademy 27.",
        ]);
    }

    public function articles()
    {   
        $articles = Article::where('visible', true)->get();

        return view('pages.articles', ['articles' => $articles]);
    }

    public function article(Article $article)
    {
       return view('pages.article', ['article' => $article]);
    }

    public function searchUsers()
    {
        return view('search-users');
    }
}
