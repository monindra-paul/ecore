<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\GraphicsPortfolio;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class GraphicsController extends Controller
{


    public function list()
    {
        $allgraphics = GraphicsPortfolio::latest('id')->get();

        return view('admin.portfolio.graphics.list', compact('allgraphics'));
    }



    public function create()
    {
        return view('admin.portfolio.graphics.create');
    }




    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'category' => 'required',

        ]);

        if ($validator->passes()) {


            $graphicsportfolio = new GraphicsPortfolio();
            $graphicsportfolio->name = $request->name;
            $graphicsportfolio->category = $request->category;
            $graphicsportfolio->status = 1;
            $graphicsportfolio->save();




            //save image

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $graphicsportfolio->id . '.' . $ext;

                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/portfolio/graphics/' . $newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() . '/portfolio/graphics/thumb/' . $newImageName;
                // $img = Image::make($sPath);
                // // $img->resize(300, 200);
                // $img->fit(540, function ($constraint) {
                //     $constraint->upsize();
                // });
                // $img->save($dPath);


                $graphicsportfolio->image = $newImageName;
                $graphicsportfolio->save();
            }


            // $request->session()->flash('success', 'Website Portfolio Added Successfully');

            return response()->json([
                'status' => true,
                'message' => 'Graphics Designing Portfolio Added Successfully'
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

        $graphicsportfolio = GraphicsPortfolio::find($id);
        if (empty($graphicsportfolio)) {
            $request->session()->flash('error', 'Not Found');
            return redirect()->route('portfolio.graphics.list');
            // return response()->json([
            //     'status'=>false,
            //     'notFound'=>true,
            //     'message'=>'Category Not Found',
            // ]);
        }


        return view('admin.portfolio.graphics.edit', compact('graphicsportfolio'));
    }



    public function update($id, Request $request)
    {
        $graphicsportfolio = GraphicsPortfolio::find($id);
        if (empty($graphicsportfolio)) {
            $request->session()->flash('error', 'Graphics Not Found');
            return response()->json([
                'status' => false,
                'notFound' => true,
                'message' => 'Graphics Not Found',
            ]);
            // return redirect()->route('categories.index');
        }


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'category' => 'required',

        ]);

        if ($validator->passes()) {

            $graphicsportfolio->name = $request->name;
            $graphicsportfolio->category = $request->category;
            $graphicsportfolio->save();

            $oldImage = $graphicsportfolio->image;

            //save image

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $graphicsportfolio->id . '-' . time() . '.' . $ext;

                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/portfolio/graphics/' . $newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() . '/portfolio/graphics/' . $newImageName;
                // $img = Image::make($sPath);
                // // $img->resize(300, 200);
                // $img->fit(540, 540, function ($constraint) {
                //     $constraint->upsize();
                // });
                // $img->save($dPath);



                $graphicsportfolio->image = $newImageName;
                $graphicsportfolio->save();


                //delete old images

                File::delete(public_path() . '/portfolio/graphics/' . $oldImage);
                File::delete(public_path() . '/portfolio/graphics/' . $oldImage);
            }



            $request->session()->flash('success', 'Graphics Updated Successfully');

            return response()->json([
                'status' => true,
                'message' => 'Graphics Updated Successfully'
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

        $graphicsportfolio = GraphicsPortfolio::find($id);
        if (empty($graphicsportfolio)) {
            $request->session()->flash('error', 'Graphics Not Found');
            return response()->json([
                'status' => true,
                'message' => 'Graphics not found',
            ]);
            // return redirect()->route('categories.index');
        }

        File::delete(public_path() . '/portfolio/graphics/' . $graphicsportfolio->image);
        // File::delete(public_path() . '/uploads/category/' . $websiteportfolio->image);

        $graphicsportfolio->delete();
        $request->session()->flash('success', 'Graphics Deleted Successfully');

        return response()->json([
            'status' => true,
            'message' => 'Graphics Deleted Successfully',
        ]);
    }
}
