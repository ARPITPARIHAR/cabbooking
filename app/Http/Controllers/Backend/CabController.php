<?php

namespace App\Http\Controllers\Backend;

use App\Models\Cab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Cab::paginate(15);
        return view('backend.cab.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.cab.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'driver_name'        => 'required|string|max:255',
            'driver_phone'       => 'required|string|max:20',
            'license_number'     => 'required|string|max:255',
            'experience'         => 'required|numeric|min:0',
            'address'            => 'required|string|max:255',
            'cab_name'           => 'nullable|string|max:255',
            'cab_number'         => 'nullable|string|max:255',
            'cab_type'           => 'nullable|string|max:100',
            'seating_capacity'   => 'nullable|integer',
            'ac'                 => 'nullable|boolean',
            'status'             => 'nullable|string',
            'image'              => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bank_name'          => 'nullable|string|max:255',
            'account_holder_name'=> 'nullable|string|max:255',
            'account_number'     => 'nullable|string|max:50',
            'ifsc_code'          => 'nullable|string|max:20',
            'branch_name'        => 'nullable|string|max:255',
        ]);

        $cab = new Cab();
        $cab->driver_name = $request->driver_name;
        $cab->driver_phone = $request->driver_phone;
        $cab->license_number = $request->license_number;
        $cab->experience = $request->experience;
        $cab->address = $request->address;
        $cab->cab_name = $request->cab_name;
        $cab->cab_number = $request->cab_number;
        $cab->cab_type = $request->cab_type;
        $cab->seating_capacity = $request->seating_capacity;
        $cab->ac = $request->ac;
        $cab->status = $request->status;
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/cabs', $fileName, 'public');
            $cab->thumbnail_img = '/public/storage/' . $filePath;

        }

        $cab->bank_name = $request->bank_name;
        $cab->account_holder_name = $request->account_holder_name;
        $cab->account_number = $request->account_number;
        $cab->ifsc_code = $request->ifsc_code;
        $cab->branch_name = $request->branch_name;

        $cab->save();
        Artisan::call('cache:clear');
        return redirect()->route('cab.index')->with('success', 'Cab added successfully.');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Cab::findOrFail(decrypt($id));
        return view('backend.cab.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Validate the hyperlink
        ]);

        $slider = Cab::findOrFail(decrypt($id));

        if ($request->hasFile('image')) {
            $fileName = time() . '-slider-' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/sliders', $fileName, 'public');
            $slider->thumbnail_img = '/public/storage/' . $filePath; // Fixed path
        }



        $slider->save(); // Save the updated model
        Artisan::call('cache:clear');
        return redirect()->route('cab.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Cab::findOrFail(decrypt($id));
        $slider->delete();
        Artisan::call('cache:clear');
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
