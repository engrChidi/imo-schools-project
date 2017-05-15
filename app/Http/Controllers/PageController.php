<?php

namespace App\Http\Controllers;

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
}
