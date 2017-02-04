<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Published;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs  = User::join('privileges','users.privileges_id','=','privileges.id')->select('users.*','privileges_name')->find(Auth::id());
        $published  = Published::join('users','publisheds.user_id','=','users.id')->where('publisheds.user_id','=',Auth::id())->select('publisheds.*','users.*','publisheds.id as publisheds_id')->get();
        $data['objs'] = $objs;
        $data['published'] = $published;
        $data['i'] = 1;
        return view('users.view',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->validate($request,[
            'password' => 'min:4|confirmed',
            ]);
       
        //
       $objs              = User::find($id);
       $objs->first_name = $request['f_name'];
       $objs->last_name  = $request['l_name'];
       $objs->first_name_eng = $request['f_name_eng'];
       $objs->last_name_eng  = $request['l_name_eng'];
       $objs->email  = $request['email'];
       $objs->tel = $request['phone'];
       $objs->research_gate = $request['research_gate'];
       $objs->tel_in = $request['phone_in'];
       $objs->education = $request['education'];

       if($request['password']!=''){
        $objs->password   = bcrypt($request['password']);
       }
       
        if(!is_null($request['image'])){
            $imageName = $request['username'].'.'.$request['image']->getClientOriginalExtension();
            $request['image']->move(public_path('images/users'), $imageName);
        $objs->image = $imageName;
        }
       $objs->update();
       return redirect('Profile')->with('success','Update successfully.');
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
    }


}
