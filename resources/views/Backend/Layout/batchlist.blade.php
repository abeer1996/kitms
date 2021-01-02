@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Batch Table</h1>
        </div>
      </div>
      <a style="float: right" class="btn btn-primary" href="{{route('batch.form')}}">
        Add New Batch</a> <br><br><br> 

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
            <th>Batch Id</th>
            <th>Batch Name</th>
            <th>Course Name</th>
            <th>Course Level</th>
            <th>Batch Start</th>
            <th>Day 1</th>
            <th>Day 2</th>
            <th>Class Start Time</th>
            <th>Class End Time</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($batches as $key=>$batch)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$batch->batch_id}}</td>
            <td>{{$batch->batch_name}}</td>
            <td>{{$batch->course_name}}</td>
            <td>{{$batch->level}}</td>
            <td>{{$batch->batch_start}}</td>
            <td>{{$batch->day1}}</td>
            <td>{{$batch->day2}}</td>
            <td>{{$batch->appt1}}</td>
            <td>{{$batch->appt2}}</td>
            <td>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

   
</table>
{{$batches->links()}}
</div>
</div>
</div>
</div>

</main>

@stop