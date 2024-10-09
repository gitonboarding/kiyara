<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
}
