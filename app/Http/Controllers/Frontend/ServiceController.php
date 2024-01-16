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

    public function website()
    {
        return view('frontend.services.website');
    }

    public function graphics()
    {
        return view('frontend.services.graphic');
    }

    public function dm()
    {
        return view('frontend.services.digitalmarketing');
    }

    public function software()
    {
        return view('frontend.services.software');
    }

    public function app()
    {
        return view('frontend.services.app');
    }

    public function cloud()
    {
        return view('frontend.services.cloud');
    }
}
