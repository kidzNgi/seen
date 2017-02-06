<?php
namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Staff;
use App\Privilege;
use App\Facutie;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    //

    public function index($department){

    	
    	$user = DB::table('staffs')->join('users','staffs.user_id','=','users.id')->
    				   leftJoin('facuties','staffs.facuty_id','=','facuties.id')->
    				   leftJoin('positions','staffs.position_id','=','positions.id')->
    				   select('users.*','positions.position_name')->
    				   where('facuties.facuty',$department)->
    				   orderBy('staffs.position_id','asc')->
    				   get();
    				 
    	$fac = Facutie::where('facuty',$department)->get();

    	foreach ($fac as $key => $value) {
    		# code...
    		$department = $value->facuty_th;
    	}
    	$data['user'] = $user;
    	$data['i'] = 0;
    	$data['department'] = $department;

    	return view('departments.department',$data);
    }


}
