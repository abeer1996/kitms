<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Batch;

class CourseController extends Controller
{
    public function courselist(){
        $courses=Course::paginate(10);
        return view('Backend.Layout.coursedetails',compact('courses'));
    }

    public function courseFormSubmit(Request $request)
    {

        $courses = Course::create([
            'courseId'=>$request->input('courseId'),
            'courseName'=>$request->input('courseName'),
            'level'=>$request->input('level'),
            'duration'=>$request->input('duration')
        ]);
        return redirect()->back()->with('message','Course Created Successfully');
    }





    public function batchlist()
    {
        $batches=Batch::paginate(10);
        return view('Backend.Layout.batchlist', compact('batches'));
    }
    public function batchform()
    {
        return view('Backend.Layout.batchform');
    }
    public function batchformSubmit(Request $request)
    {
        $batches = Batch::create([
            'batch_id'=>$request->input('batch_id'),
            'batch_name'=>$request->input('batch_name'),
            'course_name'=>$request->input('course_name'),
            'level'=>$request->input('level'),
            'batch_start'=>$request->input('batch_start'),
            'day1'=>$request->input('day1'),
            'day2'=>$request->input('day2'),
            'appt1'=>$request->input('appt1'),
            'appt2'=>$request->input('appt2')
        ]);
        return redirect()->route('batch.list')->with('message','Batch Created Successfully');
    }
}
