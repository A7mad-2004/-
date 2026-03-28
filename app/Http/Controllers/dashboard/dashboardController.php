<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $total_trips = Trip::count();
        $total_bookings = Booking::count();
        $total_user = User::count();
        $bookings = Booking::query()->with(['user','trip'])->paginate(5);
        return view('admin.dashboard.dashboard' , compact('total_trips','total_bookings','total_user','bookings'));

    }
}
