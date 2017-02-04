<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Seennew;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Image;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('news.index')->with('news', Seennew::join('users','seennews.user_id','=','users.id')->select('seennews.*','users.username','users.image as imageUser',DB::raw('MID(detail,1,300) as detail'))->orderBy('created_at','desc')->paginate(5));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Auth::guest()){

             return redirect("index");
        }
        else if (Auth::user()->privileges_name=='ผู้ดูแลระบบ'){
               
            return view('news/create');
         }
         else{
            return redirect("index");
         }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$messages = [
            'title.required' => 'We need to know your e-mail address!',
            'title.unique' => 'มีชื่อข่าวนี้แล้ว!',
            'user_id.required' => 'กรุณาใส่ผู้ลงข่าว!',
            ];*/
        $this->validate($request, [
            'title' => 'required|max:255|unique:seennews',
            'user_id' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=400,min_height=300',
            'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]/*,$messages*/);

        $objs = new Seennew();  

        for($i=1;$i<6;$i++){
            $ai='image'.$i;
            if(!is_null($request[$ai])){
             $imageName1 = time().$ai.'.'.$request->$ai->getClientOriginalExtension();
             $destinationPath = public_path('/images/news');
             $img = Image::make($request[$ai]->getRealPath());
             $img->resize(640, 480, function ($constraint) {
                $constraint->aspectRatio();
                })->save($destinationPath.'/'.$imageName1);
              $objs[$ai] = $imageName1;
            }
        }


       
       $objs->title = $request['title'];
       $objs->detail  = $request['detail'];
      
       $objs->user_id   = $request['user_id'];
       $objs->save();
       return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $objs = Seennew::find($id);
         $data['objs'] = $objs;
         return view('news.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $objs   = Seennew::find($id);
        $objs->delete();
        return redirect('news');
    }


}
