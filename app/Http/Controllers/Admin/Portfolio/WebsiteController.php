<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\TempImage;
use App\Models\WebsitePortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Image;

class WebsiteController extends Controller
{
    public function create()
    {
        return view('admin.portfolio.website.create');
    }





    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'link' => 'required',
            'category' => 'required',

        ]);

        if ($validator->passes()) {

            // $moved_image = null;

            if ($request->hasFile('upload')) {
                $this->validate($request, [
                    'upload' => 'mimes:jpeg,png,jpg,gif,docx,pdf,svg|max:2048'
                ], [
                    'upload.max' => 'Please select document within 2 MB'
                ]);

                $upload = $request->file('upload');
                $imageName = date('his') . '-' . date('his') . '-' . date('his') . '.' . request()->upload->getClientOriginalExtension();
                $upload->move(public_path('portfolio/website/'), $imageName);
                // $mimg = 'portfolio/website/' . $imageName;
                $moved_image = 'portfolio/website/' . $imageName;
            }



            $websiteportfolio = new WebsitePortfolio();
            $websiteportfolio->name = $request->name;
            $websiteportfolio->link = $request->link;
            $websiteportfolio->category = $request->category;
            $websiteportfolio->upload = $moved_image;
            $websiteportfolio->status = 1;
            $websiteportfolio->save();

            $request->session()->flash('success', 'Website Portfolio Added Successfully');

            return response()->json([
                'status' => true,
                'message' => 'Website Portfolio Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
}
