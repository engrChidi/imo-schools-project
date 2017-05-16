
{{--@if(session()->has('above-navbar-message') && auth()->check())--}}
@if(auth()->check() && auth()->user()->activated == false)
    <div class="alert alert-info text-center" role="alert" style="margin-bottom:0px;background-color:#000;border-color:#000;color:#fff;">
        <button type="button" class="close" data-dismiss="alert" style="color:#fff;">×</button>
        {!! session()->get('above-navbar-message') !!}
        We have sent you an activation link. Kindly check your inbox and activate your account<br>
        {{--Please activate your email. --}}
        Didn't get the mail<a href="{{route('authenticated.activation-resend')}}">Resend</a> activation email.')
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
@endif