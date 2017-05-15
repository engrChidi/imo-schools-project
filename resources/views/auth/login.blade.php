@extends('layouts.app')

@section('title')
    Login | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="all_form_wrapper">
            <div class="all_form_inner_wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </fieldset>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                            {{--<div class="checkbox">--}}
                            {{--<label>--}}
                            {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <fieldset class="form-group">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">
                                        Login
                                    </button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group text-center">
                                    <p> Don't have an account? <a href="{{ url('register') }}">Sign up</a></p>
                                </div>
                                <hr>
                                <div class="form-group text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
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
