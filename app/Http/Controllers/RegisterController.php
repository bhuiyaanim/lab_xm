<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
	public function index(){
		return view('register.index');
	}

	public function sessionCheck($req){
        if($req->session()->has('username')){
            return true;
        }else{
            return false;
        }
    }

	public function valid(Request $req){
		
		$result	= DB::table('users')->where('username', $req->username)
				 ->where('password', $req->password)
				 ->get();

		if(count($result) > 0){

			$req->session()->flash('msg', "username has already been taken, please try again with diffrent username.");
			
			return redirect()->route('register.index');
			
		}else{

			$user  = new User();
            
            $user->name = $req->name;
            $user->email = $req->email;
            $user->number = $req->number;
            $user->username = $req->username;
            $user->password = $req->password;
            
            $user->type = $req->type;
            
            $user->save();
            
            $result = DB::table('users')->where('username', $req->username)->get();
            
			$req->session()->put('userid', $result[0]->id);
			$req->session()->put('username', $result[0]->username);
			$req->session()->put('password', $result[0]->password);
			$req->session()->put('name', $result[0]->name);
			$req->session()->put('email', $result[0]->email);
			$req->session()->put('number', $result[0]->number);
			$req->session()->put('type', $result[0]->type);

			if(session('type') == 'admin'){
				return redirect()->route('home.index');	
			}else{
				return redirect()->route('user.index');
			}
			
		}
	}


}
