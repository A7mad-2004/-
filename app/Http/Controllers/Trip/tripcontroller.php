<?php
namespace App\Http\Controllers\Trip;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestTrip;
use App\Models\Destination;
use App\Models\Trip;
use GrahamCampbell\ResultType\Success;

class tripController extends Controller
{

   public function index()
   {
       $trips = Trip::query()->with('destination')->withCount('bookings')->paginate(6);
       return view('admin.trips.index', compact('trips'));
   }
   public function create()
   {
       $Destination = Destination::query()->where('is_active', true)->get();
       return view('admin.trips.create', compact('Destination'));
   }
   public function store(RequestTrip $requset )
   {
        // dd($requset->all());
        $title = $requset->input('title');
        $destination_id = $requset->input('destination_id');
        $days = $requset->input('days');
        $Adult = $requset->input('Adult');
        $Child = $requset->input('Child');
        $start = $requset->input('start_date');
        $end = $requset->input('end_date');
        $capacity = $requset->input('capacity');
        $price = $requset->input('price');
        $summary = $requset->input('summary');
        $status = $requset->input('status');
        $image = $requset->file('image');


        $image_name = image_upload_trip($image, 'trips');

        // Handle the uploaded image and save the trip data to the database

        $trip = Trip::query()->create([
            'title' => $title,
            'destination_id' =>  $destination_id,
            'summary'    => $summary,
            'days'  => $days,
            'price'     => $price,
            'capacity'  => $capacity,
            'start_date'  => $start,
            'end_date' => $end,
            'image'   => $image_name,
            'status'  => $status,
            'Child'  => $Child,
            'Adults' => $Adult,

        ]);



       return redirect()->route('trips.index')->with('success', 'Trip is created');
   }
   
}
?>