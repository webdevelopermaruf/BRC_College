<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    
    public function calendar()
    {
        return view('pages.academic.calendar');
    }

    
    public function academicRules()
    {
        return view('pages.academic.academic-rules');
    }

   
    public function routine()
    {
        return view('pages.academic.routine');
    }

    
    public function syllabus()
    {
        return view('pages.academic.syllabus');
    }

    
    public function student_info()
    {
        return view('pages.academic.student-info');
    }

    public function teacher_stuff()
    {
        return view('pages.academic.teacher-stuff');
    }
    public function class_based_info()
    {
        return view('pages.academic.class-based-info');
    }
}
