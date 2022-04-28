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
    $albums = config('myArray.comics');
    $advItems = config('myArray.adv-items');

    $data = [
        'albums' => $albums,
        'advItems' => $advItems,
    ];
    return view('home', $data);
})->name('home');

Route::get('/products/{id}', function ($id) {
    return 'id prodotto' . $id;
});
