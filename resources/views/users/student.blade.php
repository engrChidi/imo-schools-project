@extends('layouts.app')

@section('title')
    Students | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
        <div class="row">

        <div class="form-group text-center">
            <h2>Edit Profile </h2>
            <p> Edit your profile</p>
        </div>

        <div class="col-md-6 col-md-offset-3">
           <form method="post" action="{{ route('update-profile-student') }}" enctype="multipart/form-data">
                {{csrf_field()}}

              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" value="{{ Auth::user()->email }}"/>
              </div>

              <div class="form-group">
               <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" id="phone_number" value="{{ Auth::user()->phone_number }}"/>
              </div>
              <div class="form-group">
                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="{{ Auth::user()->first_name }}"/>
               </div>

                <div class="form-group">
                   <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="{{ Auth::user()->last_name }}"/>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="description" id="comment" cols="30" rows="5" placeholder="Add description about you"></textarea>
                </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success">
                      Update Profile
                 </button>
              </div>
           </form>
        </div>
        </div>
    </div>
@endsection    