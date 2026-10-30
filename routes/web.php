<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// Student Registration Routes
Route::get('/', function () {
    return redirect()->route('student.form');
});

Route::get('/student-form', [StudentController::class, 'showForm'])
    ->name('student.form');

Route::post('/student-submit', [StudentController::class, 'submitForm'])
    ->name('student.submit');

// Tasks Routes
Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks.index');

Route::post('/tasks/create', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    DB::table('tasks')->insert([
        'name' => $request->input('name'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('tasks.index');
})->name('tasks.create');