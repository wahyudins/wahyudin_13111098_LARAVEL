<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Login_Controller extends Controller
{


	public function login()
		{
		  return view('index');
		}
	public function login_proses( Request $request )
		{
			//$user=user::where('name','=',$request->name and 'password','=',$request ->password);
			//if ( $user -> name == $request->name and $user -> password == $request->password)
			$user=$request->name;
			$user2=$request->password;
			$user3=user::find($user and $user2);
			//->where(name='$user' and password='$user2');
			if ( $user3 == true )
				{
					return redirect ('home');
        		}
        		else 
        		{
        			return redirect ('index');
        		}
        
		}
}

/**

	public function postLogin() {
		  $email 	= Request::get('email');
		  $password 	= Request::get('password');
				
		  if($email && $password) {
			$admin = DB::table('user')->where('email',$email)->first();
			if(!$admin) {
				return redirect('/login')->with('message', 'email Salah!!!!');
			}
			if(!hash::check($password, $admin->password)) {
				return redirect('/login')->with('message', 'Password Salah !');
			}else{
			return redirect('dashboard');
			}
			}else{
			return redirect('/login')->with('message', 'Anda belum mengisi email dan Password dengan benar !');
			}
		}


	public function login()
	{
		$users= user::all();
    	return View::make('index')->with('usersType',$usersType);
	}

*/

