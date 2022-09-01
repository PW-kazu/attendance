<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AttendanceController extends Controller
{
    public function getindex () {
        
        return view('attendance');
        
    }

    
    public function startAttendance () {
       
        return view('attendance');

    }

    public function endAttendance () {
        
        return view('attendance');

    }

    public function getAttendance () {
        
        return view('attendance');

    }


}
