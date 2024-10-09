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
        return view('backend.enquiry.index');
    }

    public function contact()
    {
        $data = contact::where('types', 'contact')->get();
        // dd($data);
        return view('backend.contact.index',compact('data'));
    }
}
