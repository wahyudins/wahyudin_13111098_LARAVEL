<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DB_Controller extends Controller
{
    
    //buat fungsi sebagai olah data DB_Mahasiswa 
    public function read()
        {
            $mahasiswa = Mahasiswa::get();
            $no=1;
            
            return view ('halaman_awal',['mahasiswa'=>$mahasiswa,'no'=>$no]);
        }

    public function create(Request $request)
        {
            $mahasiswa = new mahasiswa;
            $mahasiswa -> nama = $request->nama;
            $mahasiswa -> nim = $request->nim;
            $mahasiswa -> alamat = $request->alamat;
            $mahasiswa -> save ();

            return redirect('home');  
        }

    public function delete($id)
        {
            $mahasiswa = Mahasiswa::find($id)->delete();

            return redirect('home');
        }
    public function edit($id)
        {
            $mahasiswa = Mahasiswa::where('id','=',$id)->get();
            return view ('edit',['siswa'=>$mahasiswa]);   
        }
    
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save ();
        return redirect('home');
    }
}

//public function edit_proses()
  //      {
//
  //         $data= array('nama' =>Input::get('nama') ,
    //                  'nim' =>Input::get('nim') ,
      //               'alamat' => Input::get('alamat'));  
        //    mahasiswa:: where('id','=',Input::get('id'))->update($data);
          //  return View('awal');           
        //} 