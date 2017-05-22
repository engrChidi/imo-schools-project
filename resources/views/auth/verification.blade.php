@extends('layouts.app')

@section('title')
    Verify Number | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="all_form_wrapper">
                <div class="all_form_inner_wrapper">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><b>Verify your phone number</b></div>
                        <div class="panel-body">
                            <form class="form-horizontal auth_form" role="form" method="POST" action="{{ route('verifyOtp') }}">
                                {{ csrf_field() }}
                                @if (session('Error'))
                                    <div class="alert alert-danger">
                                        {{ session('Error') }}
                                    </div>
                                @endif
                                <div>
                                    @if(auth()->user()->phone_number)
                                    <p> A text message with a verification code was just sent to
                                       <b>{{maskPhoneNumber(Auth::user()->phone_number)}}</b>
                                    </p>
                                    <p>
                                        Kindly check and enter the number
                                    </p>
                                    @endif
                                </div>

                                <fieldset class="form-group{{ $errors->has('otp') ? ' has-error' : '' }}">
                                    <input id="otp" type="number" class="form-control" name="otp" placeholder="Enter OTP" required autofocus>

                                    @if ($errors->has('otp'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('otp') }}</strong>
                                    </span>
                                    @endif

                                </fieldset>

                                <fieldset class="form-group">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success auth_button">
                                            Done
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
