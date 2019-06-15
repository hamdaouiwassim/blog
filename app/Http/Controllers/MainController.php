<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    /*function index()
    {
        return view('admin.login');
    }*/
    function checklogin(Request $request)
    {
        $this->validate($request, [
          'email'       => 'required|email',
          'password'   => 'required|alphaNum|min:3',


        ]);

        $user_data = array(
            'email'    => $request->get('email'),
            'password' => $request->get('password'),


        );
        if(Auth::attempt($user_data))
        {
            return view('admin.index');
        }
        else
        {
            return back()->with('error', 'Veuillez verifier');
        }
    }
    /*function successlogin()
    {
        return view('admin.index');
    }*/

}


