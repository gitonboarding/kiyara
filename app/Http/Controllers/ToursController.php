<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\{Storage,Log};

class ToursController extends Controller
{
    public function index()

    {
        $tours = Tours::all();
        // dd($tours);
        return view('backend.tours.index', compact('tours'));
    }

    public function create()
    {
        return view('backend.tours.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'tour_name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tour_duration' => 'required|string',
            'parson_no' => 'required|integer|min:1',
            'category' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string', // Special notes or description from CKEditor
        ]);

        // Handle validation failure
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new tour instance
        $tour = new Tours();
        $tour->name = $request->input('tour_name');
        $tour->duration = $request->input('tour_duration');
        $tour->parson_no = $request->input('parson_no');
        $tour->category = $request->input('category');
        $tour->price = $request->input('price');
        $tour->dec = $request->input('description');

        // Handle the image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tours', 'public'); // Store in public disk
            $tour->image = $imagePath;
        }

        // Save the tour to the database
        $tour->save();

        // Redirect to the tour index page with success message
        return redirect()->route('tours.index')->with('success', 'Tour created successfully!');
    }
    public function edit($id)
    {
        $tour = Tours::find($id);
        if (!$tour) {
            abort(404);
        }
        return view('backend.tours.edit', compact('tour'));
    }
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'tour_name' => 'required|string|max:255',
            'tour_duration' => 'required|string|max:255',
            'parson_no' => 'required|integer|min:1',
            'category' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validate image file
        ]);

        // Find the tour record
        $tour = Tours::findOrFail($id);

        // Update the tour fields
        $tour->name = $request->tour_name;
        $tour->duration = $request->tour_duration;
        $tour->parson_no = $request->parson_no;
        $tour->category = $request->category;
        $tour->price = $request->price;
        $tour->dec = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($tour->image) {
                Storage::delete($tour->image);
            }
            // Store the new image
            $tour->image = $request->file('image')->store('tours');
        }

        // Save the updated tour record
        $tour->save();

        // Redirect back with a success message
        return redirect()->route('tours.index')->with('success', 'Tour updated successfully.');
    }
    public function destroy($id)
{
    $tour = Tours::find($id);
    if (!$tour) {
        abort(404);
    }

    $imagePath = $tour->image; // Assuming this stores the correct relative path

    // Log the image path for debugging
    Log::info('Attempting to delete image at path: ' . $imagePath);

    // Check if the image exists before deletion
    if ($imagePath) {
        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
            Log::info('Image deleted successfully: ' . $imagePath);
        } else {
            Log::warning('Image not found for deletion: ' . $imagePath);
            // Log full path for verification
            Log::warning('Full path to check: ' . storage_path('app/public/' . $imagePath));
        }
    } else {
        Log::warning('No image path found in the tour record.');
    }

    // Delete the tour record
    $tour->delete();

    return response()->json(['success' => true, 'message' => 'Tour deleted successfully.']);
}


}
