<?php

use Illuminate\Http\Request;
use App\persons;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TimeController extends Controller
{
    public function index(){
        $name = DB::select('select * from persons');
        return view('welcome',['name'=>$name]);
        }

    // public function store(Request $request)
    // {
    //   $request['time']=date("Y-m-d h:i:s a", time());
    //     time::create($request->all());
    //             return view('welcome');
    }
}
