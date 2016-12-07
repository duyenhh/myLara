<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use App\Teacher;

class LoginController extends Controller
{
    // Auth::guard('khoa')->logout();
    // Auth::guard('khoa')->user()->email;
  
    public function getLogin() {
    	return view('login');
    }
    public function postLogin(Request $request) {

      $rules = [
        'email' => 'required|exists:teachers,email',
        'password' => 'required',
      ];
      $rules = [
        'email' => 'required|exists:admins,email',
        'password' => 'required',
      ];
      $messages = [
        'email.required' => 'Bạn chưa nhập email',
        'email.exists' => 'Email không tồn tại',
        'password.required' => 'Chua nhap pass',
      ];

      $validator = Validator::make($request->all(),$rules,$messages);
    	
      if($validator->fails()){
          return redirect('/login')->withErrors($validator)->withInput();
      }
      else {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/index');
        }
        else {
          return redirect('/login')->withErrors(['email'=>'Mật khẩu không đúng !']);
        }
      }
    }


}