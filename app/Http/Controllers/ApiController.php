<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function articles()
    {
        $articles = \App\Models\Article::take(10)->orderBy('id', 'DESC')->get();

        return $articles;
    }
}
