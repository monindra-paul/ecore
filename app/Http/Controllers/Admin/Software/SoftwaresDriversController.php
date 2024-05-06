<?php

namespace App\Http\Controllers\Admin\Software;

use App\Http\Controllers\Controller;
use App\Models\SoftwaresDrivers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SoftwaresDriversController extends Controller
{
    public function show()
    {
        $softwaresdrivers = SoftwaresDrivers::all();

        return view('admin.softwares.softwares-drivers.list', compact('softwaresdrivers'));
    }


    public function create()
    {
        return view('admin.softwares.softwares-drivers.create');
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


        $createData = SoftwaresDrivers::insert($data);

        if ($createData) {
            return redirect()->route('support.softwaresdrivers.list')->with('success', 'Softwares & Drivers Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }


    public function edit($id, Request $request)
    {

        $softwaresdrivers = SoftwaresDrivers::find($id);

        if (empty($softwaresdrivers)) {
            $request->session()->flash('error', 'Record Not Found');
            return redirect()->route('support.softwaresdrivers.list');
        }

        $data['softwaresdrivers'] = $softwaresdrivers;
        return view('admin.softwares.softwares-drivers.edit', $data);
    }





    public function update($id, Request $request)
    {
        $softwaresdrivers = SoftwaresDrivers::find($id);

        if (empty($softwaresdrivers)) {
            $request->session()->flash('error', 'Record Not Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
            // return redirect()->route('sub-categories.index');
        }


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'bits' => 'required',
            'link' => 'required',

        ]);

        if ($validator->passes()) {

            $softwaresdrivers->name = $request->name;
            $softwaresdrivers->bits = $request->bits;
            $softwaresdrivers->version = $request->version;
            $softwaresdrivers->link = $request->link;
            $softwaresdrivers->save();


            $request->session()->flash('success', 'Softwares & Drivers Updated Successfully');

            // return response([
            //     'status' => true,
            //     'message' => 'OS Updated Successfully',
            //     redirect()->route('support.os.list')
            // ]);
            return redirect()->route('support.softwaresdrivers.list');
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }































    public function destroy($id, Request $request)
    {

        $softwaresdrivers = SoftwaresDrivers::find($id);

        if (empty($softwaresdrivers)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
        }

        $softwaresdrivers->delete();

        $request->session()->flash('success', 'Softwares & Drivers Deleted Successfully');
        return response([
            'status' => true,
            'message' => 'Softwares & Drivers Deleted Successfully'

        ]);
    }
}
