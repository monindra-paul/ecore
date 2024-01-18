<?php

namespace App\Http\Controllers\Admin\Software;

use App\Http\Controllers\Controller;
use App\Models\Printer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrintersControllers extends Controller
{
    public function show()
    {

        $printers = Printer::all();

        return view('admin.softwares.printers.list', compact('printers'));
    }

    public function create()
    {
        return view('admin.softwares.printers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model_no' => 'required',
            'type' => 'required',
            'bits' => 'required',
            'link' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'brand' => $request->brand,
            'model_no' => $request->model_no,
            'type' => $request->type,
            'bits' => $request->bits,
            'version' => $request->version,
            'link' => $request->link,
        ];


        $createData = Printer::insert($data);

        if ($createData) {
            return redirect()->route('support.printers.list')->with('success', 'Printer Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }


    public function edit($id, Request $request)
    {

        $printers = Printer::find($id);

        if (empty($printers)) {
            $request->session()->flash('error', 'Record Not Found');
            return redirect()->route('support.printers.list');
        }

        $data['printers'] = $printers;
        return view('admin.softwares.printers.edit', $data);
    }

    public function update($id, Request $request)
    {
        $printers = Printer::find($id);

        if (empty($printers)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
            // return redirect()->route('sub-categories.index');
        }


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'brand' => 'required',
            'model_no' => 'required',
            'type' => 'required',
            'bits' => 'required',
            'link' => 'required',

        ]);

        if ($validator->passes()) {

            $printers->name = $request->name;
            $printers->bits = $request->bits;
            $printers->version = $request->version;
            $printers->brand = $request->brand;
            $printers->model_no = $request->model_no;
            $printers->type = $request->type;
            $printers->link = $request->link;
            $printers->save();


            $request->session()->flash('success', 'Printer Updated Successfully');

            // return response([
            //     'status' => true,
            //     'message' => 'OS Updated Successfully',
            //     redirect()->route('support.os.list')
            // ]);
            return redirect()->route('support.printers.list');
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function destroy($id, Request $request)
    {

        $printers = Printer::find($id);

        if (empty($printers)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
        }

        $printers->delete();

        $request->session()->flash('success', 'Printer Deleted Successfully');
        return response([
            'status' => true,
            'message' => 'Printer Deleted Successfully'

        ]);
    }
}
