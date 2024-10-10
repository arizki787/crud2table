<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// Route::get('/test-header', function () {
//     return view('test-header');
// });

Route::resource('division', DivisionController::class);

Route::resource('employee', EmployeeController::class);
