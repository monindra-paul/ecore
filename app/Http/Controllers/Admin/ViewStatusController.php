<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ViewStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ViewStatusController extends Controller
{
    public function show(Request $request)
    {


        $bills = ViewStatus::orderBy('id', 'DESC')->get();

        if (!empty($request->get('keyword'))) {
            $bills =  $bills->where('bill_no', 'like', '%' . $request->get('keyword') . '%');
        }
        return view('admin.status.list', compact('bills'));
    }

    public function create()
    {
        return view('admin.status.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'bill_no' => 'required',
            'bill_date' => 'required',
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
            'service_type' => 'required',
            'item_type' => 'required',
            'device_no' => 'required',
            'problem' => 'required',
            'details' => 'required',
            'amount' => 'required',
            'current_status' => 'required',
            'delivery_status' => 'required',
        ]);

        $data = [
            'bill_no' => $request->bill_no,
            'bill_date' => $request->bill_date,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'service_type' => $request->service_type,
            'item_type' => $request->item_type,
            'device_no' => $request->device_no,
            'problem' => $request->problem,
            'details' => $request->details,
            'amount' => $request->amount,
            'current_status' => $request->current_status,
            'delivery_status' => $request->delivery_status,
        ];


        $createData = ViewStatus::insert($data);

        if ($createData) {
            return redirect()->route('bill.list')->with('success', 'Bill Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }


    public function edit($id, Request $request)
    {

        $bills = ViewStatus::find($id);

        if (empty($bills)) {
            $request->session()->flash('error', 'Record Not Found');
            return redirect()->route('bill.list');
        }

        $data['bills'] = $bills;
        return view('admin.status.edit', $data);
    }




    public function update($id, Request $request)
    {
        $bills = ViewStatus::find($id);

        if (empty($bills)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
            // return redirect()->route('sub-categories.index');
        }


        $validator = Validator::make($request->all(), [

            'bill_no' => 'required',
            'bill_date' => 'required',
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
            'service_type' => 'required',
            'item_type' => 'required',
            'device_no' => 'required',
            'problem' => 'required',
            'details' => 'required',
            'amount' => 'required',
            'current_status' => 'required',
            'delivery_status' => 'required',

        ]);

        if ($validator->passes()) {


            $bills->bill_no = $request->bill_no;
            $bills->bill_date = $request->bill_date;
            $bills->name = $request->name;
            $bills->mobile = $request->mobile;
            $bills->email = $request->email;
            $bills->address = $request->address;
            $bills->service_type = $request->service_type;
            $bills->item_type = $request->item_type;
            $bills->device_no = $request->device_no;
            $bills->problem = $request->problem;
            $bills->details = $request->details;
            $bills->amount = $request->amount;
            $bills->current_status = $request->current_status;
            $bills->delivery_status = $request->delivery_status;
            $bills->save();


            $request->session()->flash('success', 'Bills Updated Successfully');

            // return response([
            //     'status' => true,
            //     'message' => 'OS Updated Successfully',
            //     redirect()->route('support.os.list')
            // ]);
            return redirect()->route('bill.list');
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function destroy($id, Request $request)
    {

        $bills = ViewStatus::find($id);

        if (empty($bills)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
        }

        $bills->delete();

        $request->session()->flash('success', 'Bill Deleted Successfully');
        return redirect()->route('bill.show');
    }
}
