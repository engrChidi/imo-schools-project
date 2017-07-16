@extends('layouts.app')

@section('title')
    All Business | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')


<section class="teachers_wrapper">
        <div id="teachers_overlay">
            <div class="text-center" id="teacher_heading">
                <h2>Promoting Businesses in Imo State</h2>
                <span class="fa fa-graduation-cap"></span>
             @if(Auth::guest())
               <p>Sign Up to join the list of Our business partners in Imo State</p>
               <a href="{{ url('/register') }}" class="btn btn-success"> Register</a>
               @else
                @if(auth()->user()->hasRole('business'))
                <h3>Welcome on board </h3>
                <h4> {{ Auth::user()->email }} </h4>
                @else
                <p> Click the button below to sign up as a business partner on this platform </p>
                <!-- Log the user out and sign up newly with a new business details -->
               <a href="#" class="btn btn-success">Add your business</a>
                @endif
            @endif
            </div>
        </div>
    </section>

    <section class="irs-teacher-single-field">
        <div class="container">

        @if($business_partners)
            @foreach($business_partners as $partner)
            <p>{{ $partner->email }}</p>
            @endforeach
        @else
             <div class="row text-center">
               <div>
               <p>There are no business partners add the moment</p>

               <div class="form-group">
               <p>Click here to become one</p>
                <a href="#" class="btn btn-success">Add your business</a>
               </div>
               </div>
            </div>
        @endif

        </div>
    </section>
    
@endsection