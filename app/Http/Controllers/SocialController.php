<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\SocialLogin;
use App\Traits\SmsActivationTrait;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    use SmsActivationTrait;
    public function getSocialRedirect($provider)
    {
        $providerKey = Config::get('services.' .$provider);

        if(empty($providerKey))
        {
            return view('pages.status')->with('error', 'No such provider at the moment');

        }

        return Socialite::driver( $provider )->redirect();
    }

    public function getSocialHandle( $provider)
    {
        if(Input::get('denied') != '')
        {
            return redirect()->to('/login')->with('status', 'danger')
                ->with('message', 'You did not share your profile data with our application');
        }

        $user = Socialite::driver( $provider)->user();
        //declare social user variable
        $socialUser = null;

        //check if the email is present in the database
        $userCheck = User::where('email', '=', $user->email)->first();

        $email = $user->email;

        //if email address was not stated by the user on the social media platform
        //generate a placeholder for the email field
        if(!$user->email)
        {
            $email = 'missing' . str_random(10);
            //add alert the user to update email on the dashboard and password
            //if he or she intend to use his email address to login later
        }

        if(!empty($userCheck)) {
            $socialUser = $userCheck;
        }
        else {
            $sameSocialId = SocialLogin::where('social_id', $user->id)
                ->where('provider', $provider)
                ->first();

            if(empty($sameSocialId))
            {
                // there is no combination of this social id and provider, so create new one
                $newSocialUser = new User;
                $newSocialUser->email = $email;
                $newSocialUser->avatar = $user->avatar;
                $newSocialUser->avatar_original = $user->avatar_original;
                $name = explode(' ', $user->name);

                //count and split name
                if(count($name) >= 1){
                    $newSocialUser->first_name = $name[0];
                }

                if(count($name) >= 2)
                {
                    $newSocialUser->last_name = $name[1];
                }

                $newSocialUser->password = strtolower(bcrypt($newSocialUser->first_name));
                $newSocialUser->token = str_random(64);
                $newSocialUser->save();

                // keep the record on social logins table
                $socialData = new SocialLogin;
                $socialData->social_id = $user->id;
                $socialData->provider = $provider;
                $newSocialUser->social()->save($socialData);

                //Add role for user
                $role = Role::whereName('user')->first();
                $newSocialUser->assignRole($role);
                $this->initiateEmailActivation($newSocialUser);

                $socialUser = $newSocialUser;
            }
            else {
                // load this existing social user
                $socialUser = $sameSocialId->user;
            }
        }

        auth()->login($socialUser, TRUE);

        //ensure to check if the user already exist in order to move to the main dashboard
        if( auth()->user()->hasRole('user')){
            if(auth()->user()->reg_completed == TRUE ){
                return redirect('home');
            }else {
                return redirect()->route('more-info');
            }
        }

        if( auth()->user()->hasRole('administrator')){
            return redirect()->route('admin.home');
        }
        return abort(500, 'User has no Role assigned');
    }
}
