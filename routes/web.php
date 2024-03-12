<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function (){
    return view('contacts');
});

Route::get('/chisono', function (){
    return view('chisono', [
        'titolo' => 'La mia presentazione',
        'descrizione' => "Ciao, sono Marco, vengo da Bari e frequento l'Hackademy 27.",
    ]);
});