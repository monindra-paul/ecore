<?php

namespace App\Http\Controllers\Admin\Software;

use App\Http\Controllers\Controller;
use App\Models\OS;
use Illuminate\Http\Request;

class OSController extends Controller
{
    public function show()
    {

        $allos = OS::all();

        return view('admin.softwares.os.list', compact('allos'));
    }

    public function create()
    {
        return view('admin.softwares.os.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bits' => 'required',
            'link' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'bits' => $request->bits,
            'version' => $request->version,
            'link' => $request->link,
        ];


        $createData = OS::insert($data);

        if ($createData) {
            return redirect()->route('support.os.list')->with('success', 'Operating System Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
}
