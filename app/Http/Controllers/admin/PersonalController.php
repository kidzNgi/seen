<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Staff;
 

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($value)
    {
        //

        $users = User::select('id as user_id','first_name','last_name',''.$value.' as personal')->get();
        $data['users'] = $users;
        $data['value'] = $value;

        return view('admin.personal.personal',$data);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $field)
    {
        //
        for($i=0;$i<$request['num'];$i++){

        $objs = DB::table('users')->where('id',$request['userid'][$i])->update([$field => $request['personal'][$i]]);

        }
        
        return redirect('Personal/'.$field);
    }




      public function search_personal(Request $request)
    {
        if($request['id']==1){
        $users = User::select('id as user_id','first_name','last_name','executive as personal')->where('first_name', 'like', '%'.$request['value'].'%')->get();
        }
        else if($request['id']==2){
        $users = User::select('id as user_id','first_name','last_name','envi as personal')->where('first_name', 'like', '%'.$request['value'].'%')->get();
        }
        $data['users'] = $users;

      return view('admin.personal.list',$data);
    }
}
