@extends('layouts.app')

@section('title')
    Teachers | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
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
        </div>
    </section>

    <section class="irs-teacher-single-field">
        <div class="container">
            <div class="row">

                <div id="rateTeacherModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>

                            <div class="modal-body">
                                <p>This is a modal to rate teachers on the platform</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>

                        </div>

                    </div>
                </div>

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
                <div class="col-md-8 col-sm-8">
                    <div class="irs-teacher-single-col">
                        <div class="irs-teacher-biography">
                            <ul>
                                <li><strong>Name : </strong> {{ Auth::user()->first_name }} {{ Auth::user()->last_name}}</li>
                                <li><strong>Subject You Teach  : </strong> </li>
                                <li><strong>Experience : </strong> 8 years</li>
                                <li><strong>Educational Qualification :</strong> BBA</li>
                                <li><strong>Your Current Ratings : </strong>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                {{--<li><strong>social media : </strong>--}}
                                    {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-vimeo"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-pinterest"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--</li>--}}
                                <li><strong>School: </strong></li>
                            </ul>
                            <p> Description </p>
                            <p>{{ Auth::user()->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="form-group">
    <a href="{{route('editTeacher',Auth::user()->id)}}">
        <button class="form-control btn btn-success"> Edit Profile </button>
    </a>
    </div>
    
</div>
@endsection