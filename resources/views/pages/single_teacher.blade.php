@extends('layouts.app')

@section('title')
    Teacher Details | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <section class="teachers_wrapper">
        <div id="teachers_overlay">
            <div class="text-center" id="teacher_heading">
                <h2> Teacher Details</h2>
                <span class="fa fa-graduation-cap"></span>
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
                        <button class="btn btn-success" data-toggle="modal" data-target="#rateTeacherModal">
                            Add Rating
                            <!-- check the usertype to change the text on the button and control the
                            modal to show -->
                        </button>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="irs-teacher-single-col">
                        <div class="irs-teacher-biography">
                            <ul>
                                <li><strong>Teacher Name : </strong> Rosi Jqulin</li>
                                <li><strong>Teach : </strong> math</li>
                                <li><strong>experience : </strong> 8 years</li>
                                <li><strong>educational qualification :</strong> BBA</li>
                                <li><strong>Reviews : </strong>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li><strong>social media : </strong>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><strong>School: </strong></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row irs-other-teachers">
                <div class="col-md-12">
                    <h3>other teachers</h3>
                    <div class="row">
                        <div class="row animatedParent animateOnce">
                            <div class="col-md-3 col-sm-6">
                                <div class="irs-teachers-col animated fadeInUpShort slow delay-250 go">
                                    <a href="{{route('teacher_details')}}"><img src="{{url('images/4(1).jpg')}}" alt="">
                                    </a>
                                    <div class="irs-teachers-name">
                                        <h4><a href="{{ route('teacher_details') }}">Rosi Jqulin</a></h4>
                                        <p>math teacher</p>
                                    </div>
                                    <div class="irs-teachers-social">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="irs-teachers-col animated fadeInUpShort slow delay-500 go">
                                    <a href="{{ route('teacher_details') }}"><img src="{{url('images/4(1).jpg')}}" alt="">
                                    </a>
                                    <div class="irs-teachers-name">
                                        <h4><a href="{{ route('teacher_details') }}">Ross Taylor</a></h4>
                                        <p>english teacher</p>
                                    </div>
                                    <div class="irs-teachers-social">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="irs-teachers-col animated fadeInUpShort slow delay-750 go">
                                    <a href="{{ route('teacher_details') }}"><img src="{{url('images/4(1).jpg')}}" alt="">
                                    </a>
                                    <div class="irs-teachers-name">
                                        <h4><a href="{{ route('teacher_details') }}">Jessi Taylor</a></h4>
                                        <p>chemistry teacher</p>
                                    </div>
                                    <div class="irs-teachers-social">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="irs-teachers-col animated fadeInUpShort slow delay-1000 go">
                                    <a href="{{ route('teacher_details') }}"><img src="{{url('images/4(1).jpg')}}" alt="">
                                    </a>
                                    <div class="irs-teachers-name">
                                        <h4><a href="{{ route('teacher_details') }}">Julio Jesus</a></h4>
                                        <p>history teacher</p>
                                    </div>
                                    <div class="irs-teachers-social">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection