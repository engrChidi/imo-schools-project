<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function getBusiness()
    {
        $business_partners = User::where('userType', 'business')->get();
        return view('pages.business', compact('business_partners'));
    }
}
