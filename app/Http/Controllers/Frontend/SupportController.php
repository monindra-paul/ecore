<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function remoteSupport()
    {
        return view('frontend.support.remote');
    }
}
