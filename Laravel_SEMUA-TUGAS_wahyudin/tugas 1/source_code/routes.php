<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
  return view('welcome');
});
*/
/*

//tugass UTS wahyudin
 
Route::get('/login', function () {
  return view('index');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/halaman_awal', function () {
    return view('halaman_awal');
});
Route::get('/tambah', function () {
    return view('tambah');
});

*/



//TUGAS route menggunakan controller by wahyudin : . 

Route::get('/','ViewController@index');

Route::get('/awalmenu','ViewController@halaman_awal');

//Route::get('/tambahdata','ViewController@tambah');

//Route::get('/editdata','ViewController@edit');