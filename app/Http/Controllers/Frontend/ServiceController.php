<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function hardware()
    {
        return view('frontend.services.hardware');
    }

    public function network()
    {
        return view('frontend.services.network');
    }

    public function cctv()
    {
        return view('frontend.services.cctv');
    }
}
