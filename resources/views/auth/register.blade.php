@extends('layouts.app')

@section('title')
Register | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="all_form_wrapper">
            <div class="all_form_inner_wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Register</div>
                    <div class="panel-body">
                        <div class="text-center">
                            <fieldset class="form-group">
                                <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}">
                                    <button class="btn btn-success _facebook">
                                        Register with Facebook
                                    </button>
                                </a>
                            </fieldset>

                            <fieldset class="form-group">
                                <a href="{{ route('social.redirect', ['provider' => 'google']) }}">
                                    <button class="btn btn-success _google">
                                        Register with Google
                                    </button>
                                </a>
                            </fieldset>
                        </div>

                        <hr>
                        <div class="text-center">
                            Or Register with Email
                        </div>
                        <hr>
                        <form class="form-horizontal auth_form" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <fieldset class="form-group{{ $errors->has('usertype') ? ' has-error' : '' }}">
                                <label for="usertype" class="control-label">Tell Us Who You Are</label>
                                <select id="usertype" class="form-control" name="usertype" required>
                                    <option disabled selected> Select an option </option>
                                    <option value="teacher">Teacher</option>
                                    <option value="school">School</option>
                                    <option value="student">Student</option>
                                    <option value="business">Business</option>
                                </select>
                                @if ($errors->has('usertype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usertype') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_no" class="control-label">Phone Number</label>
                                <input type="tel" id="phone_no" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ old('phone_number') }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </fieldset>


                            <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </fieldset>

                            <div class="form-group">
                                <label for="password-confirm" class="control-label">Confirm Password</label>
                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re Enter Password" required>
                                </div>
                            </div>

                            <fieldset class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-success auth_button">
                                        Register
                                    </button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group">
                                    <p>Creating an account signifies you’ve read and agree to our <a href="{{ url('terms') }}">Terms of Service</a> and
                                        <a href="{{ url('policy') }}">Privacy Policy</a>.</p>
                                </div>
                                <hr>

                                <div class="form-group text-center">
                                    <p> Already have an account? <a href="{{ url('login') }}">Login In</a></p>
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
