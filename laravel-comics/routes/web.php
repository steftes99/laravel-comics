<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', ['comics' => $comics]);
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/comic/{id}', function ($id) {
    
    $comics = config('comics');

    if(is_numeric($id) && ($id < count($comics) && $id >= 0)){
        $comic = $comics[$id];
        return view('comic', ['comic' => $comic]);
    } else {
        abort('404');
    }

})->name('comic');
