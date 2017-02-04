<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;
use App\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $cookie_name = $request->user()->username;
       $objs = DB::table('users')->join('privileges','users.privileges_id','=','privileges.id')->where('users.username',$cookie_name)->get();
       $data['objs'] = $objs;
      foreach($objs as $row){
                        echo $row->privileges_name;
        return view('home',$data);
       }
    }


    public function downloadFile()
    {
      $myFile = public_path("pdf\Course\sta.pdf");
      $headers = ['Content-Type: application/pdf'];
      $newName = 'itsolutionstuff-pdf-file-'.time().'.pdf';

      return response()->download($myFile, $newName, $headers);
    }


     

}
