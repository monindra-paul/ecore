<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MSOffice;
use App\Models\OS;
use App\Models\Printer;
use App\Models\SoftwaresDrivers;
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
        $office = MSOffice::all();
        $softwaresdrivers = SoftwaresDrivers::all();


        $epson = Printer::where('brand', 'Epson')->orderBy('id', 'DESC')->get();
        $xerox = Printer::where('brand', 'Xerox')->orderBy('id', 'DESC')->get();
        $hp = Printer::where('brand', 'Hp')->orderBy('id', 'DESC')->get();
        $canon = Printer::where('brand', 'Canon')->orderBy('id', 'DESC')->get();
        $brother = Printer::where('brand', 'Brother')->orderBy('id', 'DESC')->get();
        $bizhub = Printer::where('brand', 'BizHub')->orderBy('id', 'DESC')->get();
        $kyocera = Printer::where('brand', 'Kyocera')->orderBy('id', 'DESC')->get();
        $konicaMinolta = Printer::where('brand', 'Konica Minolta')->orderBy('id', 'DESC')->get();
        // dd($printers);

        $data['allos'] = $allos;
        $data['office'] = $office;
        $data['softwaresdrivers'] = $softwaresdrivers;



        $data['epson'] = $epson;
        $data['xerox'] = $xerox;
        $data['hp'] = $hp;
        $data['canon'] = $canon;
        $data['brother'] = $brother;
        $data['bizhub'] = $bizhub;
        $data['kyocera'] = $kyocera;
        $data['konicaMinolta'] = $konicaMinolta;


        return view('frontend.support.drivers', $data);
    }
}
