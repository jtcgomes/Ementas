<?php

//use Illuminate\Support\Facades\Route;

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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pratodia', 'PratoDiaController@index');
Route::get('/pratodia/todos','PratoDiaController@all');
Route::get('/pratodia/inserir','PratoDiaController@create');
Route::post('/pratodia/store', 'PratoDiaController@store');
Route::get('/pratodia/facebook', 'PratoDiaController@voltarIndex');
/*
Route::get('/pratodia/facebook', function () {
    return view('facebook');
});
*/
/* ate 63
Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'sopa1' => 'max:255',
        'sopa1preco' => 'max:5',
        'sopa2' => 'max:255',
        'sopa2preco' => 'max:5',

        'peixe1' => 'max:255',
        'peixe1preco' => 'max:5',
        'peixe2' => 'max:255',
        'peixe2preco' => 'max:5',

        'carne1' => 'max:255',
        'carne1preco' => 'max:5',
        'carne2' => 'max:255',
        'carne2preco' => 'max:5',

        'sobremesa1' => 'max:255',
        'sobremesa1preco' => 'max:5',
        'sobremesa2' => 'max:255',
        'sobremesa2preco' => 'max:5',

        'obs' => 'max:255',
    ]);

    $link = tap(new App\PratoDia($data))->save();

    return redirect('/');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prato-do-dia', function () {
    return view('pratodia');
});


Route::get('/submit', function () {
    return view('submit');
});
*/

/*
Route::get('/login', function () {
    return view('login');
});

/*
Route::get('/', function () {
    $links = \App\Link::all();

    return view('welcome', ['links' => $links]);
});
*/
/*
Route::get('/submit', function () {
    return view('submit');
});
*/