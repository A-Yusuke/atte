<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestController;

// 勤怠打刻
Route::get('/', [AttendanceController::class, 'stamp']);
Route::get('/attendance/start', [AttendanceController::class, 'startAttendance']);
Route::get('/attendance/end', [AttendanceController::class, 'endAttendance']);
Route::get('/attendance/{}', [AttendanceController::class, 'getAttendance']);

// 会員登録ページ
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);
// ログインページ
Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'getLogout']);

// 休憩打刻
Route::get('/break/start', [RestController::class, 'startRest']);
Route::get('/break/end', [RestController::class, 'endRest']);