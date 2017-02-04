<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Image;
use App\User;

class ImageController extends Controller
{
    //
        /**
    * Create view file
    *
    * @return void
    */
    public function imageUpload()
    {
    	return view('image-upload');
    }

    /**
    * Manage Post Request
    *
    * @return void
    */
    public function imageUploadPost(Request $request)
    {
    	$this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

    	return back()
    		->with('success','Image Uploaded successfully.')
    		->with('path',$imageName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImage()
    {
        return view('image');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $img = Image::make($image->getRealPath());
        $img->resize(640, 480, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);


        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }


    public function test(Request $request)
    {
      
        $users = DB::table('users')->where('username', 'like', '%'.$request['value'].'%')->get();
        $data['users'] = $users;

      return view('testlist',$data);


    }


    

}
