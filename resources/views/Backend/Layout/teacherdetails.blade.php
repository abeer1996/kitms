@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Teacher Table </h1>
  
        </div>
      </div>

      

<a style="float: right" class="btn btn-primary" href="{{route('teacher.form')}}">
        Add Teacher</a> <br><br><br> 

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
            <th>Teacher Id</th>
            <th>Teacher Name</th>
            <th>Phone Number</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($teachers as $key=>$teacher)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$teacher->teacher_id}}</td>
            <td>{{$teacher->teacher_name}}</td>
            <td>{{$teacher->contact}}</td>
            <td>{{$teacher->designation}}</td>
            <td>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
                <a class="btn btn-info" href="">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
{{$teachers->links()}}
</div>
</div>
</div>
</div>


</main>

@stop