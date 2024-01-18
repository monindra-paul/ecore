<?php

namespace App\Http\Controllers\Admin\Software;

use App\Http\Controllers\Controller;
use App\Models\OS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


    public function edit($id, Request $request)
    {

        $os = OS::find($id);

        if (empty($os)) {
            $request->session()->flash('error', 'Record Not Found');
            return redirect()->route('support.os.list');
        }

        $data['os'] = $os;
        return view('admin.softwares.os.edit', $data);
    }

    public function update($id, Request $request)
    {
        $os = OS::find($id);

        if (empty($os)) {
            $request->session()->flash('error', 'Record No Found');
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

            $os->name = $request->name;
            $os->bits = $request->bits;
            $os->version = $request->version;
            $os->link = $request->link;
            $os->save();


            $request->session()->flash('success', 'OS Updated Successfully');

            // return response([
            //     'status' => true,
            //     'message' => 'OS Updated Successfully',
            //     redirect()->route('support.os.list')
            // ]);
            return redirect()->route('support.os.list');
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function destroy($id, Request $request)
    {

        $os = OS::find($id);

        if (empty($os)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
        }

        $os->delete();

        $request->session()->flash('success', 'OS Deleted Successfully');
        return response([
            'status' => true,
            'message' => 'OS Deleted Successfully'

        ]);
    }
}
