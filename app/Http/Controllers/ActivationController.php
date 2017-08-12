<?php

namespace App\Http\Controllers;

use App\Activation;
use App\Traits\ActivationTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ActivationController extends Controller
{
    use ActivationTrait;
    public function activate($token)
    {
        if (auth()->user()->activated) {

            return redirect()->route('public.home')
                ->with('status', 'success')
                ->with('message', 'Your email is already activated.');
        }

        $activation = Activation::where('token', $token)
            ->where('user_id', auth()->user()->id)
            ->first();

        if (empty($activation)) {

            return redirect('home')
                ->with('status', 'wrong')
                ->with('message', 'No such token in the database!');

        }

        auth()->user()->activated = true;
        auth()->user()->save();

        $activation->delete();

        Session::forget('above-navbar-message');
        Session::forget('message');
        session()->forget('above-navbar-message');

        return redirect('home')
            ->with('status', 'success')
            ->with('message', 'You successfully activated your email!');

    }

    public function resend()
    {
        $this->initiateEmailActivation(auth()->user());

        Session::put('message', 'Activation Email sent!!');
        return redirect('check-users-details');
    }
}
