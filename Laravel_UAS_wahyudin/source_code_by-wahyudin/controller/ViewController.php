<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    //buat fungsi sebagai tampilan by wahyudin
    public function index()
    {

        return view ('index');
    }
    public function awal()
    {
        return view ('halaman_awal');
    }
    public function tambah()
    {
        return view ('tambah');
    }
    public function keluar()
    {
        return view ('exit');
    }
    public function edit()
    {
        return view ('edit');
    }

}


        //$content ="ini adalah halaman utama login";  
        //$content1 ="ini adalah halaman utama login 2";
        //$content2 ="ini adalah halaman utama login 3";
        //return view ('index')->with('showContent', compact('content1','content2'));
        //return view ('home')->with('showContent', $content);