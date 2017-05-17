<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkUser()
    {
        if( auth()->user()->hasRole('teacher')){
           return redirect()->route('teacher');
        }

        if( auth()->user()->hasRole('student')){
            return redirect()->route('student');
        }

        if( auth()->user()->hasRole('school')){
            return redirect()->route('school');
        }

        if( auth()->user()->hasRole('business')){
            return redirect()->route('business');
        }

        return route('home');
    }

    public function showTeacher()
    {
        return view('users.teacher');
    }

    public function showStudent()
    {
        return view('users.student');
    }

    public function showBusiness()
    {
        return view('users.business');
    }

    public function showSchool()
    {
        return view('users.school');
    }

    Public function moreInfo()
    {
        return view('users.more-info');
    }

    /**
     * Function to update the details of a user with role or usertype School
     * @param $id
     */
    public function updateDetailsSchool(Request $request, $id)
    {
        $input = $request->all();
        dd($input);
//        $input  = request()->all();
//        dd('Hey, you are welcome ' . ' ' . $id);
    }

    public function updateDetailsTeacher(Request $request, $id)
    {
        $input = $request->all();
        dd($input);
//        dd('Hey, you are a teacher with an id ' . ' ' . $id);
    }

    public function updateDetailsBusiness(Request $request, $id)
    {
        $input = $request->all();
        dd($input);
//        dd('Hey you are a Business Owner with an ID ' . ' ' . $id);
    }
}
