@extends('layouts.app')

@section('title')
    {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <p> This is the landing page of the website for Schools </p>
        </div>
    </div>

    @include('partials.footer')
@endsection
