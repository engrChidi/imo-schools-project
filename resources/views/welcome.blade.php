@extends('layouts.app')

@section('title')
    {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')

    <div class="preloader" style="display: none;"></div>

    <!-- main slider start -->
    <section class="irs-main-slider">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
                <li data-target="#bs-carousel" data-slide-to="2" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <span>Search for Schools and compare</span>
                        <h1>The best <strong>Schools in Imo State</strong></h1>
                        <a href="#searchSchools" class="btn btn-default irs-big-btn" role="button">Find Out More</a>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <span>Best Teachers</span>
                        <h1>Search and Rate the <strong>Best Teachers</strong></h1>
                        <a href="#bestTeachers" class="btn btn-default irs-big-btn" role="button">Start Now</a>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <span>Rate Schools</span>
                        <h1>Submit reviews and rate <strong> Schools </strong></h1>
                        <a href="#popularSchools" class="btn btn-default irs-big-btn" role="button">Start Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main slider end -->

    <!-- Welcome start -->
    <section class="irs-welcome-field">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1>Welcome To <span>Good Schools</span></h1>
                    <i class="icofont icofont-education"></i>
                    <p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome end -->

    <!-- About start -->
    <section class="irs-about-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>Get The Best of <span>education</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>You can't go wrong, when you are well informed. This platform gives you an opportunity
                            of selecting the best school
                        </p>
                    </div>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-md-3 col-sm-6">
                    <div class="irs-about-box animated fadeInLeftShort slow delay-250 go">
                        <div class="irs-about-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h4>Students</h4>
                        <p> Download past exams questions, rate your best teachers and also get a chance to rate your schools </p>
                        <a class="btn btn-default irs-btn-transparent" href="#" role="button"> Get Started </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="irs-about-box animated fadeInUpShort slow delay-500 go">
                        <div class="irs-about-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h4>Parent</h4>
                        <p> Get the best education for your children today. Search for the best schools in Imo State</p>
                        <a class="btn btn-default irs-btn-transparent" href="#" role="button">Find Out More</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="irs-about-box animated fadeInRightShort slow delay-250 go">
                        <div class="irs-about-icon">
                            <i class="fa fa-university"></i>
                        </div>
                        <h4> Schools</h4>
                        <p> Be among the best schools in Imo State, get rated and recognized for excellent</p>
                        <a class="btn btn-default irs-btn-transparent" href="{{ route('addSchool') }}" role="button">Add your school</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="irs-about-box animated fadeInRightShort slow delay-250 go">
                        <div class="irs-about-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h4>Business</h4>
                        <p> Reach out to incredible audience on this fastest growing academic platform in Imo State</p>
                        <a class="btn btn-default irs-btn-transparent" href="{{ route('all_business') }}" role="button">Start Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <section class="irs-about-field">
        <div class="container">
            <div class="row">
                <div id="searchSchools" class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>Search <span>Schools</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>
                            Academic success is important because it is strongly linked to
                            the positive outcomes we all value. Search and compare schools today.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="schoolSearchSection" class="col-md-7">

                </div>

                <div id="schoolSearchWrapper" class="col-md-5">
                    <form id="schoolSearchForm" action="#">
                        <div class="form-group">
                            <select id="state" class="form-control" name="state">
                                <option value disabled selected> Select State</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="local_government" class="form-control" name="localGovernment">
                                <option value disabled selected> Select LGA</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="school_type" class="form-control" name="schoolType">
                                <option value disabled selected>Choose A School Type</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="verified_schools" class="form-control" name="verifySchools">
                                <option value disabled selected>Verified or Unverified</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="facilities_school" class="form-control" name="facilities">
                                <option value disabled selected>Select an option</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="skill_type" class="form-control" name="skillType">
                                <option value disabled selected>Select an Skill Type</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit">
                                <span class="fa fa-search"></span>&nbsp;&nbsp;&nbsp; Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Public Schools -->
    <section class="irs-about-field">
        <div class="container">
            <div class="row">
                <div id="popularSchools" class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>Popular <span>Schools</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>
                            The following schools are tested and trusted. They are well known for
                            outstanding academic excellence.
                        </p>
                    </div>
                </div>
            </div>


            <div class="row animatedParent animateOnce">
                <div class="col-sm-6 col-md-3">
                    <div class="ct-productBox ct-u-marginBottom30">
                        <a href="{{ route('school_profile') }}">
                            <div class="ct-productImage">
                                <img src="{{ url('images/logo33.jpg') }}" alt="Product">
                            </div>
                            <div class="ct-productDescription">
                                <h5 class="ct-fw-600 ct-u-marginBottom10">Madonna International School</h5>
                            </div>
                        </a>
                        <div class="ct-productMeta">
                            <div class="ct-u-displayTableVertical">
                                <div class="ct-u-displayTableCell">
                                    <div class="starrr" data-rating="4"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa-star-o fa"></i></div>
                                </div>
                                <div class="ct-u-displayTableCell">
                                    <span>Average Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-productBox ct-u-marginBottom30">
                        <a href="#">
                            <div class="ct-productImage">
                                <img src="{{ url('images/logo44.jpg') }}" alt="Product">
                            </div>
                            <div class="ct-productDescription">
                                <h5 class="ct-fw-600 ct-u-marginBottom10">Umuhu Okabia Central Primary School</h5>
                            </div>
                        </a>
                        <div class="ct-productMeta">
                            <div class="ct-u-displayTableVertical">
                                <div class="ct-u-displayTableCell">
                                    <div class="starrr" data-rating="4"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa-star-o fa"></i></div>
                                </div>
                                <div class="ct-u-displayTableCell">
                                    <span>Average Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-productBox ct-u-marginBottom30">
                        <a href="#">
                            <div class="ct-productImage">
                                <img src="{{ url('images/logo33.jpg') }}" alt="Product">
                            </div>
                            <div class="ct-productDescription">
                                <h5 class="ct-fw-600 ct-u-marginBottom10">Evergreen star success Academy </h5>
                            </div>
                        </a>
                        <div class="ct-productMeta">
                            <div class="ct-u-displayTableVertical">
                                <div class="ct-u-displayTableCell">
                                    <div class="starrr" data-rating="4"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa-star-o fa"></i></div>
                                </div>
                                <div class="ct-u-displayTableCell">
                                    <span>Average Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-productBox ct-u-marginBottom30">
                        <a href="#">
                            <div class="ct-productImage">
                                <img src="{{ url('images/logo44.jpg') }}" alt="Product">
                            </div>
                            <div class="ct-productDescription">
                                <h5 class="ct-fw-600 ct-u-marginBottom10">Ray Jacobs Boarding School</h5>
                            </div>
                        </a>
                        <div class="ct-productMeta">
                            <div class="ct-u-displayTableVertical">
                                <div class="ct-u-displayTableCell">
                                    <div class="starrr" data-rating="4"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa-star-o fa"></i></div>
                                </div>
                                <div class="ct-u-displayTableCell">
                                    <span>Average Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- Counter start -->
    <section class="irs-counter-field irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="irs-counter-col">
                        <i class="icofont icofont-users-alt-3"></i>
                        <div class="irs-funfact">
                            <div class="start-count">{{ $schoolsCount }}</div>
                            <div class="clearfix"></div>
                            <h4>Schools</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="irs-counter-col">
                        <i class="icofont icofont-education"></i>
                        <div class="irs-funfact">
                            <div class="start-count">{{ $teachersCount }}</div>
                            <div class="clearfix"></div>
                            <h4>Teachers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="irs-counter-col">
                        <i class="icofont icofont-group-students"></i>
                        <div class="irs-funfact">
                            <div class="start-count">{{ $studentsCount }}</div>
                            <div class="clearfix"></div>
                            <h4>students</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="irs-counter-col">
                        <i class="icofont icofont-university"></i>
                        <div class="irs-funfact">
                            <div class="start-count">{{ $partnersCount }}</div>
                            <div class="clearfix"></div>
                            <h4>Business Partners</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter end -->

    <!-- Teachers start -->
    <section class="irs-teachers-field">
        <div class="container">
            <div class="row">
                <div id="bestTeachers" class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>Top Rated <span>teachers</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>
                           Top rated teachers are the ones that has demonstrated an ability to transform
                            and extend knowledge and are highly rated by students and other teachers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-md-3 col-sm-6">
                    <div class="irs-teachers-col animated fadeInUpShort slow delay-250 go">
                        <a href="{{ route('teacher_details') }}"><img src="{{url('images/1(2).jpg')}}" alt="">
                        </a>
                        <div class="irs-teachers-name">
                            <h4><a href="#">Adekunle Lawal Christianah</a></h4>
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
                        <a href="{{ route('teacher_details') }}"><img src="{{url('images/2(2).jpg')}}" alt="">
                        </a>
                        <div class="irs-teachers-name">
                            <h4><a href="#">Anthony James </a></h4>
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
                        <a href="{{ route('teacher_details') }}"><img src="{{url('images/3(2).jpg')}}" alt="">
                        </a>
                        <div class="irs-teachers-name">
                            <h4><a href="#">Clara John</a></h4>
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
                            <h4><a href="#">Chioma Austin</a></h4>
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



            <div class="clearfix"></div>
            <br><br><br>
            <div class="form-group text-center">
                <a class="btn btn-default irs-btn-transparent" href="{{ route('all_teachers') }}" role="button">See All Teachers</a>
            </div>
            <br><br>
        </div>

        <div id="searchTeacherHolder" class="form-group">
            <div id="searchTeacherOverlay">
            <div class="teacher_search_form_wrapper text-center">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">
                    <h3>Search and Rate a Teacher</h3>
                    <form id="searchForTeacherForm">
                        <div class="input-group">
                            <input placeholder="Teachers Name" id="teachers_search" class="form-control" name="teacher_name" type="text">
                            <span class="input-group-btn">
			                    	<button type="submit" class="btn btn-success">Search</button>
			                    </span>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Teachers  end -->


    <!-- Teachers start -->
    <section class="irs-teachers-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>News <span></span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur magni voluptatem similique </p>
                    </div>
                </div>
            </div>
            <div class="row animatedParent animateOnce">

            </div>

            <div class="form-group text-center">
                <a class="btn btn-default irs-btn-transparent" href="#" role="button">More Details</a>
            </div>
        </div>
    </section>
    <!-- Teachers  end -->

    <!-- Blog start -->
    <section class="irs-blog-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>Business <span>Partners</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="row animatedParent animateOnce">--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{----}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="irs-courses-col irs-blog-col animated fadeInUpShort slow delay-500 go">--}}
                        {{--<div class="irs-courses-img">--}}
                            {{--<img src="./2(3).jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="irs-info-text">--}}
                            {{--<ul class="clearfix">--}}
                                {{--<li>--}}
                                    {{--<p><i class="icofont icofont-clock-time"></i> <a href="#">14 Sep 2017</a>--}}
                                    {{--</p>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<p><i class="icofont icofont-open-eye"></i> <a href="#">65</a>--}}
                                    {{--</p>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<p><i class="icofont icofont-comment"></i> <a href="#">40</a>--}}
                                    {{--</p>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="irs-courses-content">--}}
                            {{--<h4><a href="http://irsfoundation.com/tf/templates/EducationPark/blog-single.html">Our system of education</a></h4>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin didunt ut labore et dolore magna aliqua.</p>--}}
                            {{--<a class="btn btn-default irs-btn-transparent-two" href="http://irsfoundation.com/tf/templates/EducationPark/blog-single.html" role="button">read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="irs-courses-col irs-blog-col animated fadeInRightShort slow delay-250 go">--}}
                        {{--<div class="irs-courses-img">--}}
                            {{--<img src="./3(3).jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="irs-info-text">--}}
                            {{--<ul class="clearfix">--}}
                                {{--<li>--}}
                                    {{--<p><i class="icofont icofont-clock-time"></i> <a href="#">14 Sep 2017</a>--}}
                                    {{--</p>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<p><i class="icofont icofont-open-eye"></i> <a href="#">65</a>--}}
                                    {{--</p>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<p><i class="icofont icofont-comment"></i> <a href="#">40</a>--}}
                                    {{--</p>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="irs-courses-content">--}}
                            {{--<h4><a href="http://irsfoundation.com/tf/templates/EducationPark/blog-single.html">Our system of education</a></h4>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin didunt ut labore et dolore magna aliqua.</p>--}}
                            {{--<a class="btn btn-default irs-btn-transparent-two" href="http://irsfoundation.com/tf/templates/EducationPark/blog-single.html" role="button">read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>
    <!-- Blog end -->

    <!-- Newsletter start -->
    <section class="irs-newsletter-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="irs-newsletter-col">
                        <img src="{{ url('/images/newsletter.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="irs-newsletter-col">
                        <h2>Subscribe to our newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Lorem ipsum dolor sit amet</p>
                        <form>
                            <div class="input-group">
                                <input placeholder="Your Email Address" class="form-control" name="search-field" type="text">
                                <span class="input-group-btn">
			                    	<button type="submit" class="btn">Subscribe</button>
			                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter end -->

    @include('partials.footer')
@endsection
