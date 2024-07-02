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


    public function list()
    {
        $allwebsite = WebsitePortfolio::latest('id')->get();

        return view('admin.portfolio.website.list', compact('allwebsite'));
    }


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


            $websiteportfolio = new WebsitePortfolio();
            $websiteportfolio->name = $request->name;
            $websiteportfolio->link = $request->link;
            $websiteportfolio->category = $request->category;
            $websiteportfolio->status = 1;
            $websiteportfolio->save();




            //save image

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $websiteportfolio->id . '.' . $ext;

                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/portfolio/website/' . $newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() . '/portfolio/website/thumb/' . $newImageName;
                // $img = Image::make($sPath);
                // // $img->resize(300, 200);
                // $img->fit(540, function ($constraint) {
                //     $constraint->upsize();
                // });
                // $img->save($dPath);


                $websiteportfolio->image = $newImageName;
                $websiteportfolio->save();
            }


            // $request->session()->flash('success', 'Website Portfolio Added Successfully');

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
