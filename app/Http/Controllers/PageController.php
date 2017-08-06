<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPolicy()
    {
        return view('pages.policy');
    }

    public function getTerms()
    {
        return view('pages.terms');
    }

    public function getAbout()
    {
        return view('pages.about');
    }


    public function homepage()
    {
        // count numbers of users in the database
        $studentsCount = User::where('usertype', 'student')->count();
        $schoolsCount = User::where('usertype', 'school')->count();
        $teachersCount = User::where('usertype', 'teacher')->count();
        $partnersCount = User::where('usertype', 'business')->count();

        return view('welcome', compact('studentsCount', 'schoolsCount',
        'teachersCount', 'partnersCount'
        ));
    }
}


