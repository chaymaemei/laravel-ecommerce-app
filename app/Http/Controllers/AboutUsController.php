<?php

namespace App\Http\Controllers;
use App\Models\AboutUs;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }
    
}
