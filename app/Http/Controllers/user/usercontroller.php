<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    public function landing()
    {
        $trips = Trip::query()->with(['destination','bookings'])->get();
        return view('user.landing.landing',compact('trips'));
    }


}
