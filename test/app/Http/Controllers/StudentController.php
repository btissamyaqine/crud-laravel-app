<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index(){
        $data = student::get();
        //return $data;
        return view('student-list', compact('data'));
    }
    public function addStudent(){
        return view('add-student');
    }
    public function saveStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $stu = new student;
        $stu->name = $name;
        $stu->email = $email;
        $stu->phone = $phone;
        $stu->address = $address;
        $stu->save();

        return redirect()->back()->with('success', 'student Add Successfully');
    }

    public function editStudent($id){
        $data = student::where('id', '=', $id)->first();
        return view('edit-student', compact('data'));

    }
    public function updateStudent( Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        // dd($request->all());
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        Student::where('id', '=', $id)->update([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
        ]);
        return redirect()->back()->with('success', 'student Updated Successfully');
    }
    public function deleteStudent($id){
        student::where('id','=', $id)->delete();
        return redirect()->back()->with('success', 'student Delete Successfully');

    }
}
