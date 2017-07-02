@extends('layouts.app')

@section('title')
    All Teachers | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
        <section class="irs-teachers-field">
            <div class="container">
                <div class="row animatedParent animateOnce">
                    <div class="col-md-3 col-sm-6">
                        <div class="irs-teachers-col animated fadeInUpShort slow delay-250 go">
                            <a href="{{ route('teacher_details') }}"><img src="{{url('images/4(1).jpg')}}" alt="">
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
                    <div class="col-md-3 col-sm-6">
                        <div class="irs-teachers-col animated fadeInUpShort slow delay-1250 go">
                            <a href="{{ route('teacher_details') }}"><img src="{{url('images/4(1).jpg')}}" alt="">
                            </a>
                            <div class="irs-teachers-name">
                                <h4><a href="{{ route('teacher_details') }}">ROSI JQULIN</a></h4>
                                <p>Math Teacher</p>
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
                        <div class="irs-teachers-col animated fadeInUpShort slow delay-1500 go">
                            <a href="{{ route('teacher_details') }}"><img src="{{url('images/4(1).jpg')}}" alt="">
                            </a>
                            <div class="irs-teachers-name">
                                <h4><a href="{{ route('teacher_details') }}">ROSS TAYLOR</a></h4>
                                <p>English Teacher</p>
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
                <div class="irs-pagination text-center">
                    <ul class="pagination">
                        <li><a href="#">&lt;</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">&gt;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection