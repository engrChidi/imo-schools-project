@extends('layouts.app')

@section('title')
    Business | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
    <section class="teachers_wrapper">
            <div id="teachers_overlay">
                <div class="text-center" id="teacher_heading">
                    <h2> Welcome on board</h2>
                    <span class="fa fa-graduation-cap"></span>
                    <h3> {{ Auth::user()->email }} </h3>

                </div>

                <div class="form-group">
                <p> Easiest way to reach out to a lot of customers </p>
                <!-- Please note this  -->
                <p> Change the styling to reflect that of a business </p>
                </div>
            </div>
        </section>

        <section class="irs-teacher-single-field">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-4">
                        <div class="irs-teacher-single-col">
                            <img src="{{url('images/4(1).jpg')}}" alt="company-logo">
                        </div>

                        <div class="form-group">
                            <!-- <button class="btn btn-success" data-toggle="modal" data-target="#rateTeacherModal"> -->
                                <!-- Add Rating -->
                                <!-- check the usertype to change the text on the button and control the
                                modal to show -->
                            <!-- </button> -->
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="irs-teacher-single-col">
                            <div class="irs-teacher-biography">
                                <ul>
                                    <li><strong>Business Name : </strong> {{ Auth::user()->first_name }} {{ Auth::user()->last_name}}</li>
                                    <li><strong>Business Username  : </strong> </li>
                                    <li><strong>Business Phone Number  : </strong> </li>
                                    <li><strong>Experience : </strong> {{ Auth::user()->experience }}</li>
                                    <li><strong>Educational Qualification :</strong> {{ Auth::user()->experience }}</li>
                                    <li><strong>Products : </strong>
                                        <i class="">Text Books</i>,
                                        <i class=""> Educational Items</i>,
                                        <i class="">Computer Accessories</i>,
                                        <i class="">Motivational Books</i>,
                                        <i class="">Other Items</i>

                                    </li>

                                    <li><strong>School: </strong></li>
                                </ul>
                                <p> Description of your Company</p>
                                <p>{{ Auth::user()->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="form-group">
        <a href="{{route('editBusiness',Auth::user()->id)}}">
            <button class="form-control btn btn-success"> Edit Business Details </button>
        </a>
        </div>

    </div>
@endsection