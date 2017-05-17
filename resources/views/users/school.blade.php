@extends('layouts.app')

@section('title')
    Schools | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Update The Details For Your School</div>
                <div class="panel-body">
                    <form class="form-horizontal auth_form" role="form" method="POST" action="{{ route('update-school-details', Auth::user()->id) }}">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <fieldset class="form-group{{ $errors->has('school_name') ? ' has-error' : '' }}">
                                <label for="school_name" class="control-label">School Name</label>
                                <input type="text" id="school_name" name="school_name" class="form-control" placeholder="What the name of your School" value="{{ old('school_name') }}">
                                @if ($errors->has('school_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_name') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('school_address') ? ' has-error' : '' }}">
                                <label for="school_address" class="control-label">Address</label>
                                <input type="text" id="school_address" name="school_address" class="form-control" placeholder="Your Address" value="{{ old('school_address') }}">
                                @if ($errors->has('school_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_address') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset id="avatar_section" class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                <label for="image_input_file" class="control-label">Upload Logo</label>
                                <img src="" height="200" id="preview" alt="">
                                <input name="avatar" type="file" id="image_input_file" class="form-control" onchange="previewImage()" accept="image/*">
                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('motto') ? ' has-error' : '' }}">
                                <label for="motto" class="control-label"> School Motto </label>
                                <input type="text" id="motto" name="motto" class="form-control" placeholder="Your Motto" value="{{ old('motto') }}">
                                @if ($errors->has('motto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motto') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                <label for="contact_phone" class="control-label"> Contact Phone </label>
                                <input type="text" id="contact_phone" name="contact_phone" class="form-control" placeholder="Contact Phone Number" value="{{ old('contact_phone') }}">
                                @if ($errors->has('contact_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_phone') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                <label for="contact_email" class="control-label"> Contact Email </label>
                                <input type="text" id="contact_email" name="contact_email" class="form-control" placeholder="Contact Email (if different)" value="{{ old('contact_email') }}">
                                @if ($errors->has('contact_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_email') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('school_website') ? ' has-error' : '' }}">
                                <label for="school_website" class="control-label"> School's Website (If any) </label>
                                <input type="url" id="school_website" name="school_website" class="form-control" placeholder="Contact Email (if different)" value="{{ old('school_website') }}">
                                @if ($errors->has('school_website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_website') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset class="form-group{{ $errors->has('school_facilities') ? ' has-error' : '' }}">
                                <label for="school_facilities" class="control-label"> Facilities Available </label>
                                <input type="url" id="school_facilities" name="school_facilities" class="form-control" placeholder="Facilities Available" value="{{ old('school_facilities') }}">
                                @if ($errors->has('school_facilities'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_facilities') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('school_strong_point') ? ' has-error' : '' }}">
                                <label for="school_strong_point" class="control-label"> Strong Point </label>
                                <input type="text" id="school_strong_point" name="school_strong_point" class="form-control" placeholder="School's strong point" value="{{ old('school_strong_point') }}">
                                @if ($errors->has('school_strong_point'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_strong_point') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset id="comment_wrapper" class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <label for="comment" class="control-label"> Add Comment </label>
                                <textarea class="form-control" name="comment" id="comment" cols="30" rows="5" placeholder="Post your comment here"></textarea>
                                <span id="minimum_count" class="">Minimum of 150 characters</span>
                                <span id="text_count" class="pull-right"></span>
                                <div class="clear-fix"></div>
                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('upcoming_event') ? ' has-error' : '' }}">
                                <label for="upcoming_event" class="control-label"> Upcoming Event </label>
                                <input type="text" id="upcoming_event" name="upcoming_event" class="form-control" placeholder="Upcoming Events (If any)" value="{{ old('upcoming_event') }}">
                                @if ($errors->has('upcoming_event'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('upcoming_event') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('iss_id') ? ' has-error' : '' }}">
                                <label for="iss_id" class="control-label"> Iss ID </label>
                                <input type="text" id="iss_id" name="iss_id" class="form-control" placeholder="Upcoming Events (If any)" value="{{ old('iss_id') }}">
                                @if ($errors->has('iss_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('iss_id') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('admission_requirement') ? ' has-error' : '' }}">
                                <label for="admission_requirement" class="control-label"> Admission Requirement </label>
                                <input type="text" id="admission_requirement" name="admission_requirement" class="form-control" placeholder="Admission Requirements" value="{{ old('admission_requirement') }}">
                                @if ($errors->has('admission_requirement'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admission_requirement') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('school_fees') ? ' has-error' : '' }}">
                                <label for="school_fees" class="control-label"> School Fees </label>
                                <input type="text" id="school_fees" name="school_fees" class="form-control" placeholder="School Fees" value="{{ old('school_fees') }}">
                                @if ($errors->has('school_fees'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_fees') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Le40SEUAAAAAP9scWszcbSrjeHYL7qUJAvDlgkI"></div>
                            </fieldset>
                        </div>
                        <div class="clearfix"></div>
                        <fieldset class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-success auth_button">
                                    Update
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection    