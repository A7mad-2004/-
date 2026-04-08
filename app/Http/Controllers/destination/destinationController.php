<?php

namespace App\Http\Controllers\destination;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class destinationController extends Controller
{
    //
    public function index()
    {
        
        $destinations = destination::paginate(6);
        return view('admin.destinations.index',compact('destinations'));

    }
    public function create()
    {
        return view('admin.destinations.create');
    }
    public function store(Request $request)
    {

        $date = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'description' => 'required',
            'destination_image'=> 'required|file|max:2048',
            'is_active' => 'nullable',
        ]);
        $imagePath = image_upload($date['destination_image'], 'destination');
        // check is active or not
          $is_active = $request->input('is_active') ?true : false;

          /// add new destination
          $Destination = new destination();
          $Destination->name = $date['name'];
          $Destination->cuntry = $date['country'];
          $Destination->city = $date['city'];
          $Destination->description = $date['description'];
          $Destination->image = $imagePath;
          $Destination->is_active = $is_active;
          $Destination->save();
          return redirect()->route('destinations.index')->with('success','Destination created successfully');


    }
    public function show($id)
    {
          $destination = Destination::query()->find($id)->with('trips')->first();
        return view('admin.destinations.show',compact('destination'));

    }
    public function edit($id)
    {
        $destination = Destination::query()->find($id);
        return view('admin.destinations.edit',compact('destination'));

    }
    public function update(Request $request, $id )
    {

        // 1. Validation بدون required للصورة
        $validated = $request->validate([
            'name' => 'required',
            'cuntry' => 'required',
            'city' => 'required',
            'description' => 'required',
            'destination_image' => 'nullable|image|max:2048', // nullable مش required
            'is_active' => 'nullable',
        ]);

        // 2. Find the destination
        $destination = Destination::findOrFail($id);

        // 3. Handle image ONLY if new image uploaded
        $imagePath = $destination->image; // Keep old image by default

        if ($request->hasFile('destination_image')) {
            $imagePath = image_upload($request->file('destination_image'), 'destination');
        }

        // 4. Handle is_active
        $isActive = $request->has('is_active')? true : false;

        // 5. Update
        $destination->update([
            'name' => $validated['name'],
            'cuntry' => $validated['cuntry'],
            'city' => $validated['city'],
            'description' => $validated['description'],
            'image' => $imagePath, // Use existing or new image
            'is_active' => $isActive,
        ]);

        return redirect()->route('destinations.index')->with('success', 'Destination updated successfully');
    }
    public function toggleStatus($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->is_active = !$destination->is_active;
        $destination->save();

        return redirect()->route('destinations.show', $destination->id)->with('success', 'Destination status toggled successfully');
    }
    public function destroy($id)
    {
        Destination::destroy($id);
        return redirect()->route('destinations.index')->with('success', 'Destination deleted successfully');

    }


}
