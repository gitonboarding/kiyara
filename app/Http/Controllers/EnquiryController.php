<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function enquiry()
    {
        return view('backend.enquiry.index');
    }

    public function contact()
    {
        return view('backend.contact.index');
    }
}
