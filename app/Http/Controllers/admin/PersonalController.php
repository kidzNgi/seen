<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Staff;
use App\Position;
 

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
        $position = Position::all();
        $data['position'] = $position;
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
            if($request['personal'][$i]==0){
                   $staff=DB::table('staffs')->join('facuties', 'facuties.id', '=', 'staffs.facuty_id')->where([
                    ['facuties.facuty', '=', $field],
                    ['staffs.user_id','=',$request['userid'][$i]],
                    ])->delete();
            }
            else if($request['personal'][$i]==1)
            {  

                $staff = DB::table('staffs')->join('facuties', 'facuties.id', '=', 'staffs.facuty_id')->select(DB::raw('count(*) as count'))->where([
                    ['facuties.facuty', '=', $field],
                    ['staffs.user_id',$request['userid'][$i]],
                    ])->get();
                foreach ($staff as $key ) {
                    # code...
                    if($key->count==0){
                        $facs= DB::table('facuties')->where('facuty',$field)->get(); 
                    foreach ($facs as $fac) {
                            Staff::create([
                    'user_id' =>$request['userid'][$i],

                    
                
                    'facuty_id' => $fac->id,
                    'position_id' => $pos,
                      ]);
                    }
                        }
                    }
                       
                
               /* 
                echo "string";*/
            }
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
