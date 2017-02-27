<?php
use App\Http\Controllers\Auth\AuthController;
use App\Mahasiswa;
use App\user;

//login
Route::get('/','ViewController@index');
Route::get('/index','ViewController@index');
Route::post('/login',array ('as'=>'login','uses'=>'Login_Controller@login_proses'));
Route::get('/exit','ViewController@keluar');
//Route::get('/login','ViewController@index');

Route::get('/home','DB_Controller@read');
Route::get('/home/tambah','ViewController@tambah');
Route::post('/home/tambah_proses',array ('as'=>'tambah','uses'=>'DB_Controller@create'));
Route::get('/home/delete/{id}','DB_Controller@delete');
Route::get('/home/edit/{id}','DB_Controller@edit') ;
Route::put('/home/edit/update/{id}','DB_Controller@update' );


/*
Route::get('masuk', function() 
{
    return View::make('index');
});

Route::post('masuk', function() 
{
    $validator=Validator::make(
    Input::all(),
    array(
    	"username" => "required|unique:user,username",
    	"password" => "required"
    	)
    );
    if (auth::attempt(array("username"=>Input::get('username'), "password
    	"=>Input::get('password')))) {
    	echo "login berhasil";
	    return Redirect::to('home')->with('sukses','login berhasil');
	    }
	   else
	   {
	   	return Redirect::to('masuk')->with('eror','maaf login gagal');
	   }
});

*/

/**
Route::get('masuk', function() 
{
    return View::make('index');
});


Route::post('masuk', function()
{
    $rules = array(
        'name'             => 'required',                        
        'email'            => 'required|email|unique:user',  
        'password'         => 'required',
        'password_confirm' => 'required|same:password'
    );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::to('masuk')
            ->withErrors($validator);

    } else {
        $users = new user;
        $users->name     = Input::get('name');
        $users->email    = Input::get('email');
        $users->password = Hash::make(Input::get('password'));

        $users->save();
        return Redirect::to('/home');

    }

});
 *??

//buat percobaan
/**
Route::get('/','ViewController@index' );
Route::get('/exit', array('as' => 'exit', 'uses' => 'ViewController@keluar') );
Route::get('/login', array('as' => 'login', 'uses' => 'ViewController@index') );
Route::get('/home/', array('as' => 'home', 'uses' => 'DB_Controller@read') );
Route::get('/home/tambah', array('as' => 'tambah', 'uses' => 'ViewController@tambah') );
Route::post('/home/tambah/tambah_proses',array('as' => 'tambah_proses', 'uses' =>'DB_Controller@create'));

Route::get('/home/delete/{id}', array('as' => 'delete', 'uses' => 'DB_Controller@delete') );
Route::get('/home/edit/{id}', array('as' => 'delete', 'uses' => 'DB_Controller@edit') );
**/ 
//Route::get('home/',array('as' => 'buat_proses', 'uses' =>'DB_Controller@read'));

/**
//halaman awa
Route::get('fgh',array('as' => 'buat_proses', 'uses' =>'DB_Controller@read'));
Route::get('awal/tambah', array('as' => 'tambah', 'uses' => 'ViewController@tambah') );
Route::post('tambah_proses',array('as' => 'tambah_proses', 'uses' =>'DB_Controller@create'));
**/
//Route::get('/tambah','ViewController@tambah');
/**
//membuat fungsi view controller ViewController
//Route::get('/','ViewController@index');
Route::get('/awal2','ViewController@awal');
Route::get('/tambah','ViewController@tambah');
Route::get('/edit','ViewController@edit');
Route::get('/keluar','ViewController@keluar');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');




//membuat fungsi view controller DB_Controller
//Route::get('tambah_proses',array('as' => 'tambah_proses', 'uses' =>'DB_Controller@update'));
Route::get('delete_proses',array('as' => 'delete_proses', 'uses' =>'DB_Controller@delete'));
Route::get('edit_proses',array('as' => 'edit_proses', 'uses' =>'DB_Controller@edit'));
//Route::get('/awal',array('as' => 'buat_proses', 'uses' =>'DB_Controller@read'));
Route::get('create',array('as' => 'create', 'uses' =>'DB_Controller@create'));

//membuat link supaya bootstrap teh bisaaa link
Route::get('awal3', array('as' => 'awal', 'uses' => 'ViewController@awal') );
Route::get('login', array('as' => 'login', 'uses' => 'ViewController@index') );
Route::get('exit', array('as' => 'exit', 'uses' => 'ViewController@keluar') );
//Route::get('tambah', array('as' => 'tambah', 'uses' => 'ViewController@tambah') );
Route::get('edit', array('as' => 'edit', 'uses' => 'DB_Controller@edit') );
Route::get('hapus', array('as' => 'delete', 'uses' => 'DB_Controller@delete') );
Route::get('post', array('as' => 'delete', 'uses' => 'DB_Controller@read') );
**/


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