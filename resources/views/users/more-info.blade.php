@extends('layouts.app')

@section('title')
    More Info | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="all_form_wrapper">
                <div class="all_form_inner_wrapper">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Tell us who you are</div>
                        <div class="panel-body">
                            @if(Auth::user())
                            <form class="form-horizontal auth_form" role="form" method="POST" action="{{ route('usertype-update', auth()->user()->id) }}">
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

                                <fieldset class="form-group">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success auth_button">
                                            Update Details
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection