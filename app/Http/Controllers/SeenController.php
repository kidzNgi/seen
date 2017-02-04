<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Seennew;
use App\Highlight;
use Storage;
class SeenController extends Controller
{
    //
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    		//$objs = Seennew::select()->limit(3)->orderBy('created_at','desc')->get();


    		$objs = DB::table('seennews')
                ->select('seennews.*', DB::raw('MID(detail,1,150) as detail'))
                ->limit(8)
                ->orderBy('created_at','desc')
                ->get();
    		$data['objs'] = $objs;
            $data['objs2'] = Highlight::all();
    		return view('index',$data);
    }

}
