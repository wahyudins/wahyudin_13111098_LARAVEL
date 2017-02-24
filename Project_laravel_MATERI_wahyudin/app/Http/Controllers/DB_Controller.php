<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DB_Controller extends Controller
{
    //buat fungsi sebagai olah data DB_Mahasiswa by wahyudin
    public function create()
        {
            $mahasiswa = new Mahasiswa;
            $mahasiswa -> nama ="wahyudin";
            $mahasiswa -> nim ="13111098";
            $mahasiswa -> alamat ="jln bandung";
            $mahasiswa -> save ();
            
            echo "data berhasillll di buat atau tambah __by wahyudin";
        }
        
    public function read()
        {
            $mahasiswa = Mahasiswa::all();
            
            
            foreach ($mahasiswa as $mhs) 
            {
                echo "<br><b>Nama</b> :";
                echo $mhs->nama;
                echo "<br><b>NIM</b> :";
                echo $mhs->nim;
                echo "<br><b>Alamat</b> :";
                echo $mhs->alamat;
            }
        }


    public function update()
        {
            $mahasiswa = Mahasiswa::find(2);
            $mahasiswa -> nama ="bapak Wahyudin";
            $mahasiswa -> nim ="13111099";
            $mahasiswa -> alamat ="hohoo bandung bolanggg";
            $mahasiswa -> save ();

            echo "<br><b>update berhsil</b> :";
        } 

        
    public function delete()
        {
            $mahasiswa = Mahasiswa::find(2);
            $mahasiswa -> delete ();

            echo "data berhasil di hapussssss by wahyudin";
        }

}
