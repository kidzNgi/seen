<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Highlight;

class AdminController extends Controller
{


	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    	if(Auth::user()->privileges_name=='ผู้ดูแลระบบ')
    	{
        	return view('admin.index');
    	}

    	return redirect('index');
        
    }

     //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHighlight()
    {
        //
        if(Auth::user()->privileges_name=='ผู้ดูแลระบบ')
        {
            return view('admin.highlight');
        }

        return redirect('index');
        
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upHighlight(Request $request)
    {
       $this->validate($request, [
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]/*,$messages*/);
        $objs = Highlight::find(1);
            # code...
        $i=1;
        
        for($i=1;$i<4;$i++){
            $ai='image'.$i;
            if(!is_null($request[$ai])){
             $imageName1 = $ai.'.'.$request->$ai->getClientOriginalExtension();
             $request->$ai->move(public_path('images/highlight'), $imageName1);
              $objs[$ai] = $imageName1;
        }
        }
        
      /*  if(!is_null($request['image2'])){
             $imageName2 = 'image2'.'.'.$request->image2->getClientOriginalExtension();
             $request->image2->move(public_path('images/highlight'), $imageName2);
              $objs['image2'] = $imageName2;
        }
        if(!is_null($request['image3'])){
             $imageName3 = 'image3'.'.'.$request->image3->getClientOriginalExtension();
             $request->image3->move(public_path('images/highlight'), $imageName3);
             $objs['image3'] = $imageName3;
        }*/

       
       
       
        
        $objs->update();

        return redirect('admin/highlight');
    }

}
