<?php

use App\Mahasiswa;


//membuat fungsi view controller ViewController
Route::get('/','ViewController@index');
Route::get('/awal','ViewController@awal');
Route::get('/tambah','ViewController@tambah');
Route::get('/edit','ViewController@edit');
Route::get('/keluar','ViewController@keluar');


//membuat fungsi view controller DB_Controller
Route::get('tambah_proses',array('as' => 'tambah_proses', 'uses' =>'DB_Controller@update'));
Route::get('delete_proses',array('as' => 'delete_proses', 'uses' =>'DB_Controller@delete'));
Route::get('edit_proses',array('as' => 'edit_proses', 'uses' =>'DB_Controller@edit'));
Route::get('read',array('as' => 'buat_proses', 'uses' =>'DB_Controller@read'));
Route::get('create',array('as' => 'create', 'uses' =>'DB_Controller@create'));

//membuat link supaya bootstrap teh bisaaa link
Route::get('awal', array('as' => 'awal', 'uses' => 'ViewController@awal') );
Route::get('login', array('as' => 'login', 'uses' => 'ViewController@index') );
Route::get('exit', array('as' => 'exit', 'uses' => 'ViewController@keluar') );
Route::get('tambah', array('as' => 'tambah', 'uses' => 'ViewController@tambah') );
Route::get('edit', array('as' => 'edit', 'uses' => 'DB_Controller@edit') );
Route::get('hapus', array('as' => 'delete', 'uses' => 'DB_Controller@delete') );
Route::get('post', array('as' => 'delete', 'uses' => 'DB_Controller@read') );



//tugass UTS wahyudin

//Route::get('/edit', function () {
 //   return view('edit');
//});
//Route::get('/index', function () {
 //   return view('index');
//});
//Route::get('/halaman_awal', function () {
  //  return view('halaman_awal');
//});
//Route::get('/tambah1', function () {
  //  return view('tambah');
//});


//TUGAS route menggunakan controller by wahyudin : . 

//Route::get('/','ViewController@index');

//Route::get('/awalmenu','ViewController@halaman_awal');

//Route::get('/tambahdata','ViewController@tambah');

//Route::get('/editdata','ViewController@edit');