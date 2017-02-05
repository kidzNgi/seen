<?php
namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Staff;
use App\Privilege;

class DepartmentController extends Controller
{
    //

    public function index($department){
    	
    	$user = User::where($department,1)->get();
    	$data['user'] = $user;
    	$data['i'] = 0;

    	return view('departments.department',$data);
    }


}
