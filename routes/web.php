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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' =>'auth',
    // 'prefix' => 'blog',
    'as' => 'blog:'
], function(){

    Route::get('/blogs', 'BlogController@index')->name('index');
    Route::get('/create', 'BlogController@create')->name('create');
    Route::post('/create', 'BlogController@store')->name('store');
    Route::get('/blogs/show/{blog}', 'BlogController@show')->name('show');
    Route::get('/edit/{blog}', 'BlogController@edit')->name('edit');
    Route::post('/edit/{blog}', 'BlogController@update')->name('update');
    Route::get('/delete/{blog}', 'BlogController@destroy')->name('delete');
});

//Route::view('/','template.home');
// Route::get('/','PublicController@index');
// Route::get('/{blog}','PublicController@show')->name('public:show');

