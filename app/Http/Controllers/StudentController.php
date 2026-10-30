<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showForm()
    {
        $courses = [
            'AI' => 'Artificial Intelligence',
            'PHP' => 'PHP Programming',
            'Python' => 'Python Programming'
        ];

        return view('student-form', compact('courses'));
    }

    public function submitForm(Request $request)
    {
        $name = $request->input('name');
        $course = $request->input('course');

        return view('student-result', compact('name', 'course'));
    }
}
