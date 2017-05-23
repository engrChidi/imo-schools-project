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
    @yield('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
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


        <nav class="navbar navbar-default navbar-static-top">
            @include('partials.above-navbar-alert')
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    @if((Auth::user()->full_name()))
                                     {{ Auth::user()->email }}
                                    @else
                                    {{ Auth::user()->full_name() }}
                                    @endif
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('check-user-details') }}">
                                           Dashboard
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
                    </ul>
                </div>
            </div>
        </nav>

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
