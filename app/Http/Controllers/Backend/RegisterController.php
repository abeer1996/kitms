<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Student;
use App\Models\Teacher;


class RegisterController extends Controller
{
    public function role(){
        $roles= Role::all();
        return view('Backend.Layout.role',['roles'=>$roles]);

    }

    public function roleStore(Request $request)
    {
        

        // $this->validate($request,[
        //     'role_id'=>'required|integer|unique',
        //     'name'=>'required|string'

        // ]);
        
        // $request->validate([
        //     'role_id'=>'required|integer|unique:roles,role_id',
        //     'name'=>'required|string'
        // ]);
       
        $roles = Role::create([
            'role_id'=> $request->input('role_id'),
            'role_name'=> $request->input('role_name')
        ]);
    
                return redirect()->back()->with('message','Role Created Successfully');
    }


    public function studentForm(){
        return view('Backend.Layout.Studentform');

    }
    public function studentFormSubmit(Request $request){
       $students = Student::create([
            'student_id'=>$request->input('student_id'),
            'student_name'=>$request->input('student_name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'email'=>$request->input('email'),
            'dob'=>$request->input('dob'),
            'present_address'=>$request->input('present_address'),
            'permanent_address'=>$request->input('permanent_address'),
            'course_name'=>$request->input('course_name'),
            'level'=>$request->input('level'),
            'doa'=>$request->input('doa'),
            'ctype'=>$request->input('ctype'),
            'course_fee'=>$request->input('course_fee'),
            'ptype'=>$request->input('ptype'),
            'receive_payment'=>$request->input('receive_payment'),
            'due_payment'=>$request->input('due_payment'),
            'trx_id'=>$request->input('trx_id')

        ]);
    return redirect()->route('student.list')->with('message','Student Registration Done Successfully.');
    }

    public function studentList()
    {
        $students=Student::paginate(10);
        return view('Backend.Layout.studentdetails',compact('students'));

    }
    
    public function teacherForm(){

        return view('Backend.Layout.teacherform');
    }
    public function teacherFormSubmit(Request $request){
        
       $teachers= Teacher::create([
            'teacher_id'=>$request->input('teacher_id'),
            'teacher_name'=>$request->input('teacher_name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'email'=>$request->input('email'),
            'nid'=>$request->input('nid'),
            'doj'=>$request->input('doj'),
            'designation'=>$request->input('designation')
        ]);
        return redirect()->route('teacher.list')->with('message','Teacher Registration Done Successfully.');
    }

    public function teacherlist(){
        $teachers=Teacher::paginate(10);
        return view('Backend.Layout.teacherdetails',compact('teachers'));
    }
}
