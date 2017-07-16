@extends('layouts.app')

@section('title')
    Schools | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')

   <section class="teachers_wrapper">
           <div id="teachers_overlay">
               <div class="text-center" id="teacher_heading">
                   <h2> Welcome on board</h2>
                   <span class="fa fa-graduation-cap"></span>
                   @if(Auth::user()->first_name)
                   <h3> {{ Auth::user()->email }} </h3>
                   @else
                   <h3> Kindly add the name of your school </h3>
                   @endif


               </div>
           </div>
       </section>

    <!-- * TODO * Change the styling to reflect that of schools -->
       <section class="irs-teacher-single-field">
           <div class="container">
               <div class="row">
                   <div class="col-md-4 col-sm-4">
                       <div class="irs-teacher-single-col">
                           <img src="{{url('images/4(1).jpg')}}" alt="teacher">
                       </div>

                       <div class="form-group">
                           <!-- <button class="btn btn-success" data-toggle="modal" data-target="#rateTeacherModal"> -->
                               <!-- Add Rating -->
                               <!-- check the usertype to change the text on the button and control the
                               modal to show -->
                           <!-- </button> -->
                       </div>
                   </div>

                   <div class="col-md-4 col-sm-4">
                        <div class="profile-title">
                            <h2>Basic Details</h2>
                            <p> Phone Number:  </p>
                            <p> School Email:  </p>
                        </div>

                        <div class="profile-title">
                            <h2>Facilities</h2>
                            <p> ** List of facilities </p>

                        </div>
                   </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="profile-title">
                            <h2> Motto </h2>
                            <p>  </p>

                        </div>
                    </div>
               </div>
           </div>
       </section>

       <div class="form-group">
       <a href="{{route('editSchool',Auth::user()->id)}}">
           <button class="form-control btn btn-success"> Edit School Details </button>
       </a>
       </div>

@endsection    