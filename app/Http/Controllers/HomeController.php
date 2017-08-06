<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homePage()
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
          'name'    =>  'Oluyemi',
            'test'  =>  'This is a test'
        ];

        // sample data for the date and time
        $users = Auth::user()->get();
        $dashboard_user_results = $this->getDate($users);
        $result = explode('-', $dashboard_user_results);
        $today_user_count = $result[0];
        $month_user_count = $result[1];
        $year_user_count = $result[2];
        $total_user_count = count($users);

        return view('home', compact('datas','today_user_count','month_user_count',
            'year_user_count','total_user_count'));
    }

    public function getDate($data_args)
    {
        $current_date = date('Y-m-d', strtotime(Carbon::now()));

        $current_month = date('Y-m', strtotime(Carbon::now()));

        $current_year = date('Y', strtotime(Carbon::now()));

        $today_user_count = 0;
        $month_user_count = 0;
        $year_user_count = 0;

        foreach ($data_args as $data_arg){
            if($current_date == date('Y-m-d', strtotime($data_arg->created_at))){
                $today_user_count++;
            }

            if($current_month == date('Y-m', strtotime($data_arg->created_at))){
                $month_user_count++;
            }

            if( $current_year == date('Y', strtotime($data_arg->created_at))) {
                $year_user_count++;
            }
        }

        return $today_user_count.'-'.$month_user_count.'-'.$year_user_count;

    }
}
