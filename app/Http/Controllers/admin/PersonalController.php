<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Staff;
use App\Position;
use Illuminate\Support\Facades\Auth;
 

class PersonalController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($value)
    {
        //

        $field = $value;

                if(Auth::user()->privileges_name=='ผู้ดูแลระบบ')
        {
        
        $users = User::select('users.id as user_id','first_name','last_name',$field.' as personal')->get();
        $staff = Staff::leftJoin('facuties','staffs.facuty_id','=','facuties.id')->where('facuties.facuty',$field)->get();
        $data['staff'] = $staff;
        $data['users'] = $users;
        $data['value'] = $field;
        $position = Position::all();
        $data['position'] = $position;

        return view('admin.personal.load_personal',$data);
        }
        return redirect('index');
        
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

                        $ob = new Staff();
                        $ob->user_id = $request['userid'][$i];
                        $ob->facuty_id = $fac->id;
                        $ob->position_id = $request['position_id'][$i]? $request['position_id'][$i] : null;
                        $ob->save();

                    }
                        }

                    else{
                            $ob2 = Staff::leftJoin('facuties','staffs.facuty_id','=','facuties.id')->where('facuties.facuty',$field)->where('user_id','=',$request['userid'][$i]);


                            $ob2->update(['position_id' => $request['position_id'][$i] ? $request['position_id'][$i] : null]);
                        }
                    }
                       
                

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
