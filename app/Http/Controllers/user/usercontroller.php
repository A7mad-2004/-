<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    //
    public function landing()
    {
        $trips = Trip::query()->with(['destination','bookings'])->withCount('bookings')->get();
        return view('user.landing.landing',compact('trips'));
    }

    public function booking()
    {
        $booking = Booking::query()->where('user_id', Auth::id())
        ->with('trip')
        ->get();

        return view('user.bookind',compact('booking'));
    }
    public function bookingStore(Request $request)
    {
        $request->validate([
            'trip_id' => 'required|exists:trips,id',
        ]);
        

        Booking::create([
            'user_id' => Auth::id(),
            'trip_id' => $request->trip_id,
        ]);

        return redirect()->route('booking')->with('success', 'Booking successful!');
    }   


}
