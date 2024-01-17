<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OS;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function remoteSupport()
    {
        return view('frontend.support.remote');
    }

    public function softwareDrivers()
    {
        $allos = OS::all();
        return view('frontend.support.drivers', compact('allos'));
    }
}
