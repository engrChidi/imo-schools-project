<?php

namespace App\Http\Controllers;

use App\Business;
use App\School;
use App\Traits\SmsActivationTrait;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class UserController extends Controller
{
    use SmsActivationTrait;
    public function checkUser()
    {

        if( strtolower(auth()->user()->usertype) == 'teacher'){
            return redirect()->route('teacher');
        }


        if( strtolower(auth()->user()->usertype) == 'student'){
            return redirect()->route('student');
        }


        if( strtolower(auth()->user()->usertype) == 'school'){
            return redirect()->route('school');
        }


        if( strtolower(auth()->user()->usertype) == 'business'){
            return redirect()->route('business');
        }

        //redirect if user has no role assigned yet
        if( !auth()->user()->hasRole('')){
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



    }

    public function updateDetailsBusiness(Request $request, $id)
    {
        $input = $request->all();
        dd($input);
//        dd('Hey you are a Business Owner with an ID ' . ' ' . $id);
    }

    public function usertypeUpdate(Request $request, $id)
    {
        $input = $request->all();
        $this->validate($request,[
            'usertype'     =>       'required',
            'phone_number'  =>      'required'
        ]);

        $user_update = User::where('id', $id)->update([
            'usertype'      =>      $request->usertype,
            'phone_number'  =>      $request->phone_number
        ]);

        // OTP value
        $otp = rand(100000, 999999);

        $this->initiateSmsActivation($request->phone_number, $otp);

        //set session variable
        Session::put('OTP', $otp);

        return redirect()->route('check-user-details');
    }

    /**
     * Function to display OTP verification page
     */
    public function getVerifyOtp()
    {
        return view('auth.verification');
    }

    public function verifyOtp(Request $request)
    {
        return redirect()->route('check-user-details');


        // Ensure to modify the OTP later 
        // $enteredOtp = $request->input('otp');

        // $OTP = $request->session()->get('OTP');

        // if($OTP == $enteredOtp){
        //     $user_verified = User::where('id', Auth::user()->id)->update([
        //        'isVerified'     =>      TRUE
        //     ]);

        //     //Session variable removed
        //     Session::forget('OTP');

        //     return redirect()->route('check-user-details')->with('Success', 'Your phone number has been successfully verified');
        // }else {
        //     return redirect()->back()->with('Error', 'OTP does not exist');
        // }
    }

    public function editTeachersProfile(Request $request, $id)
    {
        $profile = User::where('id', $id)->get();

        return view('users.edit-teacher', compact('profile'));
    }

    public function editStudentsProfile(Request $request)
    {
        $profile_student = User::where('id', Auth::user()->id )->update([
            'first_name'    =>  $request['first_name'],
            'last_name'    =>  $request['last_name'],
            'phone_number'    =>  $request['phone_number'],
            'description'    =>  $request['description']
        ]);
    }

    public function editSchoolsProfile(Request $request, $id)
    {
        $schoolProfile = School::where('user_id', $id);
        return view('users.edit-school', compact('schoolProfile'));
    }

    public function editBusinessProfile(Request $request, $id)
    {
        $businessProfile = Business::where('user_id', $id);
        return view('users.edit-school', compact('businessProfile'));
    }
}
