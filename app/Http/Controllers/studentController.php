<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use Session;


class studentController extends Controller
{
    public function index(){
        $data=array();
        $data['students']=student::all();
   return view('student.view',$data);
    }

    public function store(Request $request){
        $data= new student();
        $data->name= $request->name;
        $data->class=$request->class;
        $data->section=$request->section;
        $data->save();



        Session::flash('alert-success', 'success');
//        return redirect()->back();



    }

    public function edit($id){

    }
    public function delete(Request $request){

       $data=student::find($request->delete_id);
       $data->delete();
        return redirect()->back();

    }

    public function update(Request $request){
        $data=student::find($request->id);
        $data->name= $request->name;
        $data->class= $request->class;
        $data->section=$request->section;
        $data->save();
        return redirect()->back();
    }



    public function show_password(){
        return view('show_password.view');
    }


    public function username(Request $request){

        $data=student::where('name',$request->name)->get();
        $count=count($data);

        if ($count > 0){
//            return response()->json(10);

            echo '<span class="text-danger">User Name Not Available</span>';

        }else{
            echo '<span class="text-danger">User Name Available</span>';
        }

//        return response()->json($count);





    }


}
