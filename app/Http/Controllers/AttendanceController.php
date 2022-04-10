<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function stamp()
    {
        return view('index');
    }

    public function startAttendance()
    {
        //
    }
    public function endAttendance()
    {
        //
    }
    public function getAttendance()
    {
        return view('attendance');
    }
}

// [
//             'attendance' => DB::table('attendance')->paginate(5)
//         ]