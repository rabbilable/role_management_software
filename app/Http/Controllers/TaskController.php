<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task1;
use App\Task2;
use App\Task3;
use App\Task4;
use App\Task5;
use App\Task6;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index(){
       return view('task.index');
    }


    public function task1(Request $request){
        $data = request()->validate([
            'task' => 'required',
            'created_at' => Carbon::now()
           ]);
    
        Task1::create($data);

        return back();
    }
    public function task2(Request $request){
        $data = request()->validate([
            'task' => 'required',
            'created_at' => Carbon::now()
           ]);
    
        Task2::create($data);
        return back();
    }
    public function task3(Request $request){
        $data = request()->validate([
            'task' => 'required',
            'created_at' => Carbon::now()
           ]);
    
        Task3::create($data);
        return back();
    }
    public function task4(Request $request){
        $data = request()->validate([
            'task' => 'required',
            'created_at' => Carbon::now()
           ]);
        Task4::create($data);
        return back();
    }
    public function task5(Request $request){
        $data = request()->validate([
            'task' => 'required',
            'created_at' => Carbon::now()
           ]);
    
        Task5::create($data);
        return back();
    }
    public function task6(Request $request){

        // Task6::create([
        //     'task6'
        // ]);

        // print_r($request->all()); 

       $data = request()->validate([
        'task' => 'required',
        'created_at' => Carbon::now() 
       ]);

       Task6::create($data);
       return back();
    }
}
