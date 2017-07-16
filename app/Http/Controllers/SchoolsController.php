<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function allSchools()
    {
        return view('pages.schools');
    }

    public function getSchool()
    {
        return view('pages.single_school');
    }

    public function addSchool()
    {
        return view('pages.add-school');
    }
}
