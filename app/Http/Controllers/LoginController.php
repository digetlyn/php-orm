<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); // login.blade.php  를 가지고 온다.
    }


    public function loginSubmit(Request $request) 
    {
        $validateData =  $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6|max:12'
        ]);
       // return $request->all();
       $email = $request->input('email');  // $email = $_REQUEST['email']; 같은 의미,,,   또는  $email = $_POST['email'];
       $password = $request->input('password');
       return 'Email : '. $email.', password:'. $password;
       
    }
}
