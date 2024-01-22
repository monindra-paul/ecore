<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ViewStatus;
use Illuminate\Http\Request;

class ViewStatusController extends Controller
{
    public function index()
    {
        return view('frontend.support.view-status');
    }


    public function status(Request $request)
    {
        $bill_no = null;
        if ($request->bill_no != '') {
            $bill_no = ViewStatus::where('bill_no', $request->bill_no)->first();

            if (!$bill_no) {
                return view('frontend.support.view-status', array('bill_no' => null, 'error' => 'Invalid Bill No.'));
            }
        } else {
            return view('frontend.support.view-status', array('bill_no' => null, 'error' => 'Enter a Bill No.'));
        }
        return view('frontend.support.view-status', compact('bill_no'));
    }
}
