@extends('layouts.app')

@section('title')
    Teachers | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Update Your Details As a Teacher</div>
                <div class="panel-body">
                    <form class="form-horizontal auth_form" role="form" method="POST" action="{{ route('update-teachers-details', Auth::user()->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <fieldset class="form-group{{ $errors->has('teacher_name') ? ' has-error' : '' }}">
                                <label for="teacher_name" class="control-label"> Name</label>
                                <input type="text" id="teacher_name" name="teacher_name" class="form-control" placeholder="Your name" value="{{ old('teacher_name') }}">
                                @if ($errors->has('teacher_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teacher_name') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('school_id') ? ' has-error' : '' }}">
                                <label for="school_id" class="control-label"> School ISS_ID</label>
                                <input type="text" id="school_id" name="school_id" class="form-control" placeholder="Your School ISS_ID" value="{{ old('school_id') }}">
                                @if ($errors->has('school_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_id') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="control-label"> Gender</label>
                                <select name="gender" class="form-control" id="gender">
                                    <option selected disabled>Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="control-label"> Phone Number </label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group{{ $errors->has('subjects') ? ' has-error' : '' }}">
                                <label for="subjects" class="control-label"> Subjects</label>
                                <select name="subjects[]" class="form-control" id="subjects" multiple>
                                    <option selected disabled>Select your Subjects</option>
                                    <option value="subject1">Subject 1</option>
                                    <option value="subject2">Subject 2</option>
                                    <option value="subject3">Subject 3</option>
                                    <option value="subject4">Subject 4</option>
                                    <option value="subject5">Subject 5</option>
                                    <option value="subject6">Subject 6</option>
                                </select>
                                @if ($errors->has('subjects'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subjects') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                                <label for="class" class="control-label"> Class</label>
                                <select name="class[]" class="form-control" id="class" multiple>
                                    <option selected disabled>Select the classes you handle</option>
                                    <option value="class1">class 1</option>
                                    <option value="class2">class 2</option>
                                    <option value="class3">Class 3</option>
                                    <option value="class4">Class 4</option>
                                    <option value="class5">Class 5</option>
                                    <option value="class6">Class 6</option>
                                </select>
                                @if ($errors->has('class'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('class') }}</strong>
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