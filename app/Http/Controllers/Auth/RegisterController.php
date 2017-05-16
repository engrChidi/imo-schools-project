<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Traits\SmsActivationTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use SmsActivationTrait;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usertype' => 'required',
            'phone_number' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:20|confirmed',
            'password_confirmation' => 'required|same:password',
        ],
         [
              'usertype.required'         =>      'Please tell us who you are',
              'phone_number.required'     =>      'The phone number is required',
              'email.required'            =>      'Email address is required',
              'email.email'               =>      'Email is invalid',
              'password.required'         =>      'Password is required',
              'password.min'              =>      'Password needs to have at least 6 characters',
              'password.max'              =>      'Password maximum length is 20 characters'
          ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */

    protected function create(array $data)
    {
        $user =  User::create([
            'usertype' => $data['usertype'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'token'    =>  str_random(64),
            'reg_completed' =>  TRUE
        ]);

        $user_type = strtolower($data['usertype']);
        $role = Role::whereName($user_type)->first();
        $user->assignRole($role);
        $this->initiateEmailActivation($user);
        return $user;
    }

    protected function redirectTo(){
        //Check users' type and redirect accordingly
        return '/check-users-details';
    }
}
