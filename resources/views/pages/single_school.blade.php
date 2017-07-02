@extends('layouts.app')

@section('title')
    School Profile | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')

<section class="irs-courses-field irs-courses-single">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="irs-courses-col irs-courses-col-single">
                    <div class="irs-courses-img">
                        <img src="images/courses/1.jpg" alt="">
                        <div class="irs-time">
                            <p><a href="#">10:00 pm - 4:00 pm</a>
                            </p>
                        </div>
                        <div class="irs-courses-img-text">
                            <ul class="clearfix">
                                <li>
                                    <p><i class="zmdi zmdi-calendar-alt"></i> 3 years</p>
                                </li>
                                <li class="pull-right">
                                    <p><i class="zmdi zmdi-money"></i> 290</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="irs-courses-content">
                        <h4><a href="course-single.html">About Computer Science courses</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker</p>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="irs-course-features">
                                    <h2>course features</h2>
                                    <ul>
                                        <li><strong>Course Name :</strong> <span class="pull-right">Computer Science</span>
                                        </li>
                                        <li><strong>Teacher :</strong> <span class="pull-right">Jeson Monica</span>
                                        </li>
                                        <li><strong>Reviews :</strong> <span class="pull-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</span>
                                        </li>
                                        <li><strong>Start Date :</strong> <span class="pull-right">November 20, 2017</span>
                                        </li>
                                        <li><strong>Start Time :</strong> <span class="pull-right">10:00 AM</span>
                                        </li>
                                        <li><strong>Course duration :</strong> <span class="pull-right">2 years</span>
                                        </li>
                                        <li><strong>End Time :</strong> <span class="pull-right">04:00 PM</span>
                                        </li>
                                        <li><strong>Institution :</strong> <span class="pull-right">XYZ University</span>
                                        </li>
                                        <li><strong>Available Seats :</strong> <span class="pull-right">50</span>
                                        </li>
                                        <li><strong>Course Fee :</strong> <span class="pull-right">290$</span>
                                        </li>
                                    </ul>
                                    <a class="btn btn-default irs-btn-transparent-two" href="blog-single.html" role="button">enroll now</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="images/man.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="irs-side-bar">
                    <div class="irs-search-box">
                        <form>
                            <div class="input-group">
                                <input placeholder="Search..." class="form-control" name="search-field" type="text">
                                    <span class="input-group-btn">
										<button type="submit" class="btn"><i class="fa fa-search"></i></button>
									</span>
                            </div>
                        </form>
                    </div>
                    <div class="irs-post">
                        <h3 class="irs-sidebar-title">Latest <span>Post</span></h3>
                        <div class="irs-post-item">
                            <img src="images/blog/sm1.jpg" alt="">
                            <h4>HTML5 fully responsive templates</h4>
                            <span>Date: 25 June, 2017</span>
                        </div>
                        <div class="irs-post-item">
                            <img src="images/blog/sm2.jpg" alt="">
                            <h4>fully responsive new project</h4>
                            <span>Date: 26 June, 2017</span>
                        </div>
                        <div class="irs-post-item">
                            <img src="images/blog/sm3.jpg" alt="">
                            <h4>Develop html project for themeforest</h4>
                            <span>Date: 27 June, 2017</span>
                        </div>
                    </div>
                    <div class="irs-categories">
                        <h3 class="irs-sidebar-title">Categories</h3>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Online class</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Board exam</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Special exam</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Exam result</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Learn english</a>
                            </li>
                        </ul>
                    </div>
                    <div class="irs-video">
                        <h3 class="irs-sidebar-title">educational <span>video</span></h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hWkKSkI3gkU"></iframe>
                        </div>
                    </div>
                    <div class="irs-tag-box clearfix">
                        <h3 class="irs-sidebar-title">Tags</h3>
                        <div class="clearfix"></div>
                        <ul>
                            <li><a href="#">Learn</a>
                            </li>
                            <li><a href="#">Education</a>
                            </li>
                            <li><a href="#">English</a>
                            </li>
                            <li><a href="#">Math</a>
                            </li>
                            <li><a href="#">Science</a>
                            </li>
                            <li><a href="#">Exam</a>
                            </li>
                            <li><a href="#">Education</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="irs-comment-single">
                    <h3>comment (12)</h3>
                    <div class="irs-comment-item">
                        <img src="images/courses/comment-1.jpg" alt="">
                        <div class="irs-comment-content">
                            <h4><a href="#">Cris Jenison</a> <span class="pull-right"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></span> </h4>
                            <h6>Date: <a href="#">10 June, 2017</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto perferendis magnam asperiores neque libero, harum fuga vitae labore, in ipsam eveniet amet cupiditate quam. Tenetur blanditiis, beatae praesentium sapiente</p>
                        </div>
                    </div>
                    <div class="irs-comment-item irs-comment-item-right">
                        <img src="images/courses/comment-2.jpg" alt="">
                        <div class="irs-comment-content">
                            <h4><a href="#">Mili Cristina</a> <span class="pull-right"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></span> </h4>
                            <h6>Date: <a href="#">09 June, 2017</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto perferendis magnam asperiores neque libero, harum fuga vitae labore, in ipsam eveniet amet cupiditate quam. Tenetur blanditiis, beatae praesentium sapiente</p>
                        </div>
                    </div>
                    <div class="irs-comment-item">
                        <img src="images/courses/comment-3.jpg" alt="">
                        <div class="irs-comment-content">
                            <h4><a href="#">Cris Jordan</a> <span class="pull-right"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></span> </h4>
                            <h6>Date: <a href="#">08 June, 2017</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iusto perferendis magnam asperiores neque libero, harum fuga vitae labore, in ipsam eveniet amet cupiditate quam. Tenetur blanditiis, beatae praesentium sapiente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="irs-live-comment">
                    <h3>Live comments</h3>
                    <div class="row">
                        <form id="contact_form" name="contact_form" action="includes/contact.php" method="post" novalidate="novalidate">
                            <div class="col-md-6">
                                <input id="form_name" name="form_name" class="form-control" placeholder="Name*" required="required" data-error="Name is required." type="text">
                            </div>
                            <div class="col-md-6">
                                <input id="form_email" name="form_email" class="form-control" placeholder="Email*" required="required" data-error="Email is required." type="text">
                            </div>
                            <div class="col-md-12">
                                <textarea id="form_message" name="form_message" class="form-control irs-textarea" rows="12" placeholder="Comment*" required="required" data-error="Message is required."></textarea>
                                <button class="btn btn-default irs-big-btn" type="submit">POST COMMENT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="irs-related-courses">
                    <h3>related courses</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="irs-courses-col">
                                <div class="irs-courses-img">
                                    <img src="images/courses/2.jpg" alt="">
                                    <div class="irs-time">
                                        <p><a href="#">10:00 pm - 4:00 pm</a>
                                        </p>
                                    </div>
                                    <div class="irs-courses-img-text">
                                        <ul class="clearfix">
                                            <li>
                                                <p><i class="zmdi zmdi-calendar-alt"></i> 3 years</p>
                                            </li>
                                            <li class="pull-right">
                                                <p><i class="zmdi zmdi-money"></i> 350</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="irs-courses-content">
                                    <h4><a href="course-single.html">medical science</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur</p>
                                    <a class="btn btn-default irs-btn-transparent-two" href="course-single.html" role="button">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="irs-courses-col">
                                <div class="irs-courses-img">
                                    <img src="images/courses/3.jpg" alt="">
                                    <div class="irs-time">
                                        <p><a href="#">10:00 pm - 4:00 pm</a>
                                        </p>
                                    </div>
                                    <div class="irs-courses-img-text">
                                        <ul class="clearfix">
                                            <li>
                                                <p><i class="zmdi zmdi-calendar-alt"></i> 3 years</p>
                                            </li>
                                            <li class="pull-right">
                                                <p><i class="zmdi zmdi-money"></i> 320</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="irs-courses-content">
                                    <h4><a href="course-single.html">Geometry Course</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur</p>
                                    <a class="btn btn-default irs-btn-transparent-two" href="course-single.html" role="button">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="irs-courses-col">
                                <div class="irs-courses-img">
                                    <img src="images/courses/1.jpg" alt="">
                                    <div class="irs-time">
                                        <p><a href="#">10:00 pm - 4:00 pm</a>
                                        </p>
                                    </div>
                                    <div class="irs-courses-img-text">
                                        <ul class="clearfix">
                                            <li>
                                                <p><i class="zmdi zmdi-calendar-alt"></i> 3 years</p>
                                            </li>
                                            <li class="pull-right">
                                                <p><i class="zmdi zmdi-money"></i> 290</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="irs-courses-content">
                                    <h4><a href="course-single.html">Computer Science</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur</p>
                                    <a class="btn btn-default irs-btn-transparent-two" href="course-single.html" role="button">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection