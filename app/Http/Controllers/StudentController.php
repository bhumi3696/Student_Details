<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    public function index(){
      //return view('welcome');
        $students = Students::paginate(5);
        return view('welcome', compact('students'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'

        ]);

        $students = new Students;
        $students->first_name = $request->firstname;
        $students->last_name = $request->lastname;
        $students->email = $request->email;
        $students->phone = $request->phone;

        //saving input entries to db
        $students->save();

        //route with message
        return redirect(route('home'))->with('successMsg','Student Details Added Successfully');
    }

    public function edit($id){
        $students = Students::find($id);
        return view('edit',compact('students'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'

        ]);

        $students = Students::find($id);
        $students->first_name = $request->firstname;
        $students->last_name = $request->lastname;
        $students->email = $request->email;
        $students->phone = $request->phone;

        //saving input entries to db
        $students->save();

        //route with message
        return redirect(route('home'))->with('successMsg','Student Data Updated Successfully');
    }

    public function delete($id){
        Students::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Student Deleted from the Records');

    }

}
