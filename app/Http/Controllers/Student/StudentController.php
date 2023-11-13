<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        return view('student.index');
    }
    public function __invoke(Request $request)
    {
        return view('student.reserver');
    }


}
