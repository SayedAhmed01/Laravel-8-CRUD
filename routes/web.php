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
    return view('pages.index')->name('index');
});

//Crud Controller Routes..
Route::group(['prefix'=>'dashboard'],function(){
Route::get('/','FrontEnd\CrudController@show')->name('dashboard');
Route::get('/add-new','FrontEnd\CrudController@addnew')->name('addnew');
Route::post('/add-new','FrontEnd\CrudController@create')->name('create');
Route::get('/update/{id}','FrontEnd\CrudController@update_show')->name('update');
Route::post('/update/{id}','FrontEnd\CrudController@update')->name('post.update');
Route::get('/delete/{id}','FrontEnd\CrudController@delete')->name('delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
