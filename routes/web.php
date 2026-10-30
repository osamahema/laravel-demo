<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect()->route('student.form');
});

Route::get('/student-form', [StudentController::class, 'showForm'])
    ->name('student.form');

Route::post('/student-submit', [StudentController::class, 'submitForm'])
    ->name('student.submit');