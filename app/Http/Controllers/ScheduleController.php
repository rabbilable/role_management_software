<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function index(){
       return view('schedule.index');
    }

    public function store(Request $request){
        $data = request()->validate([
            'task' => 'required',
            'wt' => 'required',
            'created_at' => Carbon::now()
           ]);
    
        Schedule::create($data);
        return back();

        // print_r($request->all());
    }
}
