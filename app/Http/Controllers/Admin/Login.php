<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Session;

class Login extends Controller
{
     
     public function login(Request $request)
     { 
     	 $data['username'] = '';
		 return view('admin.login',$data); 
     }

     public function check(Request $request)
     {

     	 $data['username'] = $request->username;      
         $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'password' => 'required',
        	]);
         if ($validator->fails()) {
            return redirect('/')
                       ->withErrors($validator)
                       ->withInput();
        }else
        {
        	$request->session()->put('user',12); 
        	return redirect('dashboard');
       }

     }
}
