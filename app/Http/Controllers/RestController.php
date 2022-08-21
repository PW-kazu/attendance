<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RestController extends Controller
{
    public function startRest () {
        return view('index');
    }

    public function endRest () {

        return view('index');
    }
}
