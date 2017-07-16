@extends('layouts.app')

@section('title')
    Add School | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')


<section class="teachers_wrapper">
        <div id="teachers_overlay">
            <div class="text-center" id="teacher_heading">
                <h2>Best Schools in Imo State </h2>
                <span class="fa fa-graduation-cap"></span>
                @if (Auth::guest())

                <p>This is your chance to join the best schools in Imo State</p>
               <a href="{{ url('/register') }}" class="btn btn-success"> Register</a>
               <br/>
               <div class="form-group">
                 <p>Already Registered as a school. <a href="{{ url('/login') }}">Login Here</a></p>
               </div>
                @else
                    @if(Auth::check() && auth()->user()->hasRole('school'))
                    <h3>Welcome on board </h3>
                    <h4> {{ Auth::user()->email }} </h4>
                    <p>Click the button below to update the details of your school</p>
                    <a href="{{ route('check-user-details') }}" class="btn btn-success"> Update School Details </a>
                    @else
                    <p> You seems to have signed up as a <b>{{ auth()->user()->getUserRole(Auth::user()->id) }}</b></p>
                    <p> Click the button below to sign up as a school with a different account details </p>
                    <!-- Log the user out and sign up newly with a new business details -->
                   <a href="{{url('/register')}}" class="btn btn-success">Register</a>
                    @endif
                 @endif

            </div>
        </div>
    </section>

<section>
<!-- Display the list of schools here -->
<p> </p>
</section>
@endsection