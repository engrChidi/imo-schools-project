<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function allTeachers()
    {
        return view('pages.teachers');
    }

    public function getTeacher()
    {
        return view('pages.single_teacher');
    }
}
