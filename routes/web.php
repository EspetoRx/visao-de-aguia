<?php

use App\Produto;
use Illuminate\Support\Facades\Storage;

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
	$produtos = Produto::get();
	$armazenamento = Storage::disk('gcs');
    return view('welcome', compact('produtos', 'armazenamento'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::match(['get', 'post'], 'register', function(){
    return abort(404);
});

Route::resource('/produto', 'ProdutoController');