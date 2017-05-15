@extends('layouts.app')

@section('title')
    Reset Password | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="all_form_wrapper">
            <div class="all_form_inner_wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Reset Password</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="text-center form-group">
                                <p>
                                    Enter the E-mail Address Associated with your account and we will send you a link to reset
                                    your password
                                </p>
                            </div>


                            <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email Address" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </fieldset>

                            <fieldset class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-success">
                                        Send Password Reset Link
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
