@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <div class="row">
                    <ul>
                        @foreach($datas as $data)
                            <li>{{ $data }}</li>
                        @endforeach
                    </ul>

                    <p>Today User: {{ $today_user_count }}</p>
                    <p>This Month: {{ $month_user_count }}</p>
                    <p> THis Week:  {{ $year_user_count }}</p>
                    <p>Total User:  {{ $total_user_count }}</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
