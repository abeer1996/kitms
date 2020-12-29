@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Student Table </h1>
  
        </div>
      </div>

      

<a style="float: right" class="btn btn-primary" href="{{route('student.form')}}">
        Add New Student</a> <br><br><br> 

        @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif

    @if($errors->any())
    @foreach($errors->all() as $er)
    <p class="alert alert-danger">{{$er}}</p>
    @endforeach
    @endif

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Student Id</th>
            <th>Student Name</th>
            <th>Phone Number</th>
            
            
            <th>Course Name</th>
            
            <th>Course Fee</th>
            
            <th>Receive Payment</th>
            <th>Due Payment</th>
            
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $key=>$student)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->student_name}}</td>
            <td>{{$student->contact}}</td>
            
            <td>{{$student->course_name}}</td>
           
            <td>{{$student->course_fee}}</td>
           
            <td>{{$student->receive_payment}}</td>
            <td>{{$student->due_payment}}</td>
            
            <td>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
                <a class="btn btn-info" href="">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>

    


</table>
{{$students->links()}}
</div>
</div>
</div>
</div>





</main>

@stop