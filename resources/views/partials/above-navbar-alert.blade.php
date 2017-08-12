
{{--@if(session()->has('above-navbar-message') && auth()->check())--}}
@if(auth()->check() && auth()->user()->activated == false)
    <div class="alert alert-info text-center" role="alert" style="margin-bottom:0px;background-color:#000;border-color:#000;color:#fff;">
        <button type="button" class="close" data-dismiss="alert" style="color:#fff;">×</button>
        {!! session()->get('above-navbar-message') !!}
        We have sent you an activation link. Kindly check your inbox and activate your account<br>
        Please activate your email.
        Didn't get the mail &nbsp;&nbsp;<a href="{{route('authenticated.activation-resend')}}">Resend</a> &nbsp;&nbsp;activation email.')
        @if (\Session::has('message'))
        <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-dismissable alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ \Session::get('message') }}
            </div>
        </div>
        <div class="clearfix"></div>
        @endif
    </div>
@endif