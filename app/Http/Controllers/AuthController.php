<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
   public function getRegister () {
       return view('register'); 
    }
    
    public function postRegister () {
        return view('register');
    }

    public function getLoign () {
        return view('register');
    }

    public function postLoign () {
        return view('login');
    }

    public function getLogout () {
        return view('logout');
    }
}
