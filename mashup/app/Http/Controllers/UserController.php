<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['message']="wat a lavely day";
        return view('register',$data);
    }
// post method
   public function showRegisterPage()
    {
        return view('register');
    }
    public function register(Request $request){
        // validation
        $validateData = $request->validate([
            'fullname' => 'required|max:50',
	        'email' => 'required|email',
	        'password' => 'required|min:6',
            ]);
            // dd($validateData);->check the array

        $fullname= $request->input("fullname");
        $email= $request->input("email");
        $password= $request->input("password");

        //array shorcut
        // $data = [
        // 	'fullname' => $fullname,
        // 	'email' => $email,
        // 	'password' => $password
        // ];

        $data['fullname']=$fullname;
        $data['email']=$email;
        $data['password']=$password;

        return view('registerOutput',$data);
    }
}
