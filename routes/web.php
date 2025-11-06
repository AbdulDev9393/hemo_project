<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DoctorProfileController;
use App\Http\Controllers\Api\PatientProfileController;
use App\Http\Controllers\Api\HospitalProfileController;
use App\Http\Controllers\Api\NgoProfileController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/test', function () {
    return response()->json([
        'message' => 'Hello, Khizar Zubair! Web routes are working correctly.',
        'status' => 'OK'
    ]);
});

ss


