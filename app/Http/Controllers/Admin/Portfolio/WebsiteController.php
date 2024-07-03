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


    public function edit($id, Request $request)
    {

        $websiteportfolio = WebsitePortfolio::find($id);
        if (empty($websiteportfolio)) {
            $request->session()->flash('error', 'Not Found');
            return redirect()->route('portfolio.website.list');
            // return response()->json([
            //     'status'=>false,
            //     'notFound'=>true,
            //     'message'=>'Category Not Found',
            // ]);
        }


        return view('admin.portfolio.website.edit', compact('websiteportfolio'));
    }






    public function update($id, Request $request)
    {
        $websiteportfolio = WebsitePortfolio::find($id);
        if (empty($websiteportfolio)) {
            $request->session()->flash('error', 'Website Not Found');
            return response()->json([
                'status' => false,
                'notFound' => true,
                'message' => 'Website Not Found',
            ]);
            // return redirect()->route('categories.index');
        }


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'link' => 'required',
            'category' => 'required',

        ]);

        if ($validator->passes()) {

            $websiteportfolio->name = $request->name;
            $websiteportfolio->link = $request->link;
            $websiteportfolio->category = $request->category;
            $websiteportfolio->save();

            $oldImage = $websiteportfolio->image;

            //save image

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $websiteportfolio->id . '-' . time() . '.' . $ext;

                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/portfolio/website/' . $newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() . '/portfolio/website/' . $newImageName;
                // $img = Image::make($sPath);
                // // $img->resize(300, 200);
                // $img->fit(540, 540, function ($constraint) {
                //     $constraint->upsize();
                // });
                // $img->save($dPath);



                $websiteportfolio->image = $newImageName;
                $websiteportfolio->save();


                //delete old images

                File::delete(public_path() . '/portfolio/website/' . $oldImage);
                File::delete(public_path() . '/portfolio/website/' . $oldImage);
            }



            $request->session()->flash('success', 'Website Updated Successfully');

            return response()->json([
                'status' => true,
                'message' => 'Website Updated Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function destroy($id, Request $request)
    {

        $websiteportfolio = WebsitePortfolio::find($id);
        if (empty($websiteportfolio)) {
            $request->session()->flash('error', 'Website Not Found');
            return response()->json([
                'status' => true,
                'message' => 'Website not found',
            ]);
            // return redirect()->route('categories.index');
        }

        File::delete(public_path() . '/portfolio/website/' . $websiteportfolio->image);
        // File::delete(public_path() . '/uploads/category/' . $websiteportfolio->image);

        $websiteportfolio->delete();
        $request->session()->flash('success', 'Website Deleted Successfully');

        return response()->json([
            'status' => true,
            'message' => 'Website Deleted Successfully',
        ]);
    }
}
