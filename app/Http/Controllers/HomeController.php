<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\Tours;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all tours from the database
        $exploretours = Tours::all();
        $is_recommendation = Tours::where('is_recommendation', '1')->get();
        return view('frontend.index', compact('exploretours', 'is_recommendation'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function tours($category = null)
    {
        // Fetch tours based on category
        if ($category) {
            $tours = Tours::where('category', $category)->get();
        } else {
            $tours = Tours::all();
        }

        return view('frontend.tours', compact('tours', 'category'));
    }

    public function tours_details()
    {
        return view('frontend.tours_details');
    }

    public function contactussubmit(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'msg' => 'nullable|string|max:1000',
        ]);

        // Create an associative array from the validated request data
        $data = [
            'fname' => $validatedData['fname'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'msg' => $validatedData['msg'],
        ];

        // Create a new contact instance
        $contact = new Contact(); // Ensure 'Contact' is properly capitalized
        $contact->types = $request->input('type'); // Assuming 'type' is coming from the request
        $contact->info = json_encode($data); // Store the data as JSON in 'info'
        $contact->save(); // Save the instance to the database

        // Redirect back to the contact page with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
