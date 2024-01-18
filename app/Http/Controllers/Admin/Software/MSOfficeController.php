<?php

namespace App\Http\Controllers\Admin\Software;

use App\Http\Controllers\Controller;
use App\Models\MSOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MSOfficeController extends Controller
{
    public function show()
    {

        $office = MSOffice::all();

        return view('admin.softwares.office.list', compact('office'));
    }

    public function create()
    {
        return view('admin.softwares.office.create');
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


        $createData = MSOffice::insert($data);

        if ($createData) {
            return redirect()->route('support.office.list')->with('success', 'MS Office Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }


    public function edit($id, Request $request)
    {

        $office = MSOffice::find($id);

        if (empty($office)) {
            $request->session()->flash('error', 'Record Not Found');
            return redirect()->route('support.office.list');
        }

        $data['office'] = $office;
        return view('admin.softwares.office.edit', $data);
    }

    public function update($id, Request $request)
    {
        $office = MSOffice::find($id);

        if (empty($office)) {
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

            $office->name = $request->name;
            $office->bits = $request->bits;
            $office->version = $request->version;
            $office->link = $request->link;
            $office->save();


            $request->session()->flash('success', 'MS Office Updated Successfully');

            // return response([
            //     'status' => true,
            //     'message' => 'OS Updated Successfully',
            //     redirect()->route('support.os.list')
            // ]);
            return redirect()->route('support.office.list');
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
            return redirect()->route('support.office.list');
        }
    }


    public function destroy($id, Request $request)
    {

        $office = MSOffice::find($id);

        if (empty($office)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
        }

        $office->delete();

        $request->session()->flash('success', 'MS Office Deleted Successfully');
        return response([
            'status' => true,
            'message' => 'MS Office Deleted Successfully'

        ]);
    }
}
