
<?php

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

Route::get('test', 'Hellocontroller@index')->name('addForm');
Route::post('form-submit', 'Hellocontroller@form')->name('formdata');
Route::view('listing', 'datalist')->name('list');


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

