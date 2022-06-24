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
    $comics_array = config('comics');

    $comics = [];

    foreach ($comics_array as $comic) {
        $comics[] = $comic;
    }

    $data = [
        'comics' => $comics,
    ];

    return view('main', $data);
});
