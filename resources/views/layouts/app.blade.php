<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    @yield('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<script src='https://www.google.com/recaptcha/api.js'></script>--}}
</head>
<body>
<div id="preloader">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
    <div id="app">
        <!-- Modal for OTP resend or not received -->
        <div class="modal fade" id="noOTPModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" id="" role="document">
                <div id="modalContent" class="modal-content">
                    <div id="modalHeader" class="modal-header text-center">
                        <h4> Imo Schools </h4>
                    </div>
                    <div class="modal-body">
                        <div id="modBody" class="mod">
                            <h4 class="">No OTP yet?</h4>
                            <ul>
                                <li>( 1 ) Please be patient - Sometimes it takes a while for text messages to arrive.</li>
                                <li>( 2 ) You might just be experiencing network delay</li>
                                <li>
                                    <form id="resendOTPForm" action="" accept-charset="UTF-8" method="post">
                                        {{csrf_field()}}
                                        {{--<input name="utf8" type="hidden" value="&#x2713;" />--}}
                                        ( 3 ) Haven't received OTP after  20mins? Click the button below for a new code:
                                        <button id="resendLinkBtn" name="button" type="submit" class="btn btn-success">Resend OTP</button>
                                    </form>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Header Start -->
        <header class="irs-main-header smaller">
            <div class="irs-header-top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="irs-header-top-col irs-center-2">
                                <p><i class="fa fa-phone" aria-hidden="true"></i> +23408000000000</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-4 text-center">
                            <div class="irs-header-top-col irs-center-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="search" placeholder="Search for a good school in Imo State...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Search!</button>
                                      </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="irs-header-top-col text-right irs-center-2">
                                <div class="irs-social text-right irs-center-2">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="irs-header-nav scrollingto-fixed scroll-to-fixed-fixed" style="z-index: 1000; position: fixed; top: 0px; margin-left: 0px; width: 1279px; left: 0px;">--}}
            <div class="irs-header-nav scrollingto-fixed scroll-to-fixed-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <nav class="navbar navbar-default irs-navbar">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="{{url('/')}}">
                                            <span>Good Schools</span>
                                        </a>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="flipInY">
                                            <li class="dropdown active">
                                                <a href="{{ url('/') }}" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Home </a>
                                            </li>
                                            <li><a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu dropdownhover-bottom">
                                                    <li><a href="#">News</a>
                                                    </li>
                                                    <li><a href="#">Events</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><a href="#">Downloads</a>
                                            </li>

                                            <li><a href="#">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.container-fluid -->
                            </nav>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="irs-log-reg">

                                @if (Auth::guest())
                                    {{--<a href="#">Login</a>--}}
                                    <a href="{{ route('login') }}">Login</a>
                                    <span>/</span>
                                    {{--<a href="#">Register</a>--}}
                                    <a href="{{ route('register') }}">Register</a>
                                @else
                                    <li class="dropdown" id="profileDropDown">
                                        <div class="" id="userdp">
                                            <img src="{{ asset('images/default-avatar-female.png') }}" alt="">
                                        </div>

                                        <div class="">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                @if((Auth::user()->full_name()))
                                                    {{ Auth::user()->email }}
                                                @else
                                                    {{ Auth::user()->full_name() }}
                                                @endif
                                                {{--<span class="caret"></span>--}}
                                            </a>
                                        </div>


                                        <ul class="dropdown-menu" role="menu">
                                            <li style="width: 200px;height: 300px">
                                                <a href="{{ route('check-user-details') }}">
                                                    Profile
                                                </a>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div style="display: block; width: 1279px; height: 90px; float: none;"></div>--}}
        </header>
        <!-- Main Header end -->

        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--@include('partials.above-navbar-alert')--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--@if((Auth::user()->full_name()))--}}
                                     {{--{{ Auth::user()->email }}--}}
                                    {{--@else--}}
                                    {{--{{ Auth::user()->full_name() }}--}}
                                    {{--@endif--}}
                                    {{--<span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('check-user-details') }}">--}}
                                           {{--Dashboard--}}
                                        {{--</a>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>

    <script type="text/javascript">
        $('#otp_resend_btn').click(function(){
            $('#noOTPModal').modal('show')
        })
    </script>

    <!-- script start from here -->
    {{--<script type="text/javascript" src="./jquery.js"></script>--}}
    {{--<script type="text/javascript" src="./bootstrap.min.js"></script>--}}
    {{--<script type="text/javascript" src="./bootstrap-dropdownhover.min.js"></script>--}}
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
    {{--<script type="text/javascript" src="./stellar.js"></script>--}}
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    {{--<script type="text/javascript" src="./jquery.magnific-popup.min.js"></script>--}}
    {{--<script type="text/javascript" src="./jquery.masonry.min.js"></script>--}}
    {{--<script type="text/javascript" src="./css3-animate-it.js"></script>--}}
    {{--<script type="text/javascript" src="./bootstrap-slider.js"></script>--}}
    {{--<script type="text/javascript" src="./jquery.scrollUp.js"></script>--}}
    {{--<script type="text/javascript" src="./classie.js"></script>--}}

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{'js/script.js'}}"></script>


    <script>
        // Make preloader invisible
        $(document).ready(function(){
           $('#preloader').css('display', 'none');
        });
    </script>
    <!-- Show current date on the website -->
    {{--<script>--}}
        {{--var n = new Date();--}}
            {{--y = n.getFullYear();--}}
            {{--m = n.getMonth();--}}
            {{--d = n.getDate();--}}
            {{--document.getElementById('date').innerHTML = m + "/" + d + "/" + y;--}}
    {{--</script>--}}

    <!-- Funfact START -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.start-count').each(function() {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).bind('scroll', function() {
                var speed = 3000;
                $('.start-count').each(function() {
                    var $this = $(this);
                    if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                        $this.data('counted', true);
                        $this.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function(now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                                if (0 < $this.parent('.value').length) {
                                    $this.parent('.value').css('width', val + '%');
                                }
                            }
                        });
                    }
                });
            }).triggerHandler('scroll');
        });
    </script>

    <script type="text/javascript">
        @if(Session::has('Success'))
            new Noty({
            type: 'success',
            layout: 'topRight',
            theme: 'mint',
            text: '{{ Session::get('Success') }}',
            timeout: 5000,
            progressBar: true,
            closeWith: ['click', 'button'],
            animation: {
                open: 'noty_effects_open',
                close: 'noty_effects_close'
            },
            id: false,
            force: false,
            killer: false,
            queue: 'global',
            container: false,
            buttons: [],
            sounds: {
                sources: [],
                volume: 1,
                conditions: []
            },
            titleCount: {
                conditions: []
            },
            modal: false

//            template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
        }).show();
        @endif
    </script>
</body>
</html>
