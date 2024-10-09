<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function enquiry()
    {
        // $data=contact
        $data=contact::where('types','tour')->get();
        // dd($data);
        return view('backend.enquiry.index' ,compact('data'));
    }

    public function contact()
    {
        $data = contact::where('types', 'contact')->get();
        // dd($data);
        return view('backend.contact.index',compact('data'));
    }
}
