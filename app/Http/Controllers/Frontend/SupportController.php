<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OS;
use App\Models\Printer;
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


        $epson = Printer::where('brand', 'Epson')->orderBy('id', 'DESC')->get();
        // dd($printers);

        $data['allos'] = $allos;



        $data['epson'] = $epson;


        return view('frontend.support.drivers', $data);
    }
}
