<?php

use App\Mahasiswa;
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



//pertmuan CRUD

Route::get('/tambah', function () {
  $mahasiswa = new Mahasiswa;
  $mahasiswa -> nama ="wahyudin";
  $mahasiswa -> nim ="13111098";
  $mahasiswa -> alamat ="jln bandung";
  $mahasiswa -> save ();
}); 
Route::get('/ubah', function () {
  $mahasiswa = Mahasiswa::find(1);
  $mahasiswa -> nama ="wahyu";
  $mahasiswa -> nim ="13111099";
  $mahasiswa -> alamat ="jln bandung jakarta";
  $mahasiswa -> save ();
}); 
Route::get('/tampil', function () {
  $mahasiswa = Mahasiswa::all();
  foreach ($mahasiswa as $mhs) {
  	echo "<b>Nama</b> :";
  	echo $mhs->nama;
  	echo "<b>NIM</b> :";
  	echo $mhs->nim;
  	echo "<b>Alamat</b> :";
  	echo $mhs->alamat;
  }
}); 
Route::get('/hapus', function () {
  $mahasiswa = Mahasiswa::find(1);
  $mahasiswa -> nama ="wahyu";
  $mahasiswa -> nim ="13111099";
  $mahasiswa -> alamat ="jln bandung jakarta";
  $mahasiswa -> save ();
}); 


//tugass UTS wahyudin
Route::get('/', function () {
  return view('index');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/halaman_awal', function () {
    return view('halaman_awal');
});
Route::get('/tambah1', function () {
    return view('tambah');
});





//TUGAS route menggunakan controller by wahyudin : . 

//Route::get('/','ViewController@index');

//Route::get('/awalmenu','ViewController@halaman_awal');

//Route::get('/tambahdata','ViewController@tambah');

//Route::get('/editdata','ViewController@edit');