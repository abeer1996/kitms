@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Course Table</h1>
  
        </div>
      </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Course</button>


  @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif

    @if($errors->any())
    @foreach($errors->all() as $er)
    <p class="alert alert-danger">{{$er}}</p>
    @endforeach
    @endif

  <!-- <a style="float: right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New Role</a> <br><br><br>  -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form method="post" action="{{route('course.formsubmit')}}">
                        @csrf
                        <div class="form-group">
                            <label for="courseId">Course Id</label>
                            <input type="string" name="courseId" class="form-control" placeholder="Enter Course Id Here">
                        </div>

                        <div class="form-group">
                            <label for="courseName">Course Name</label>
                            <input type="string" name="courseName" class="form-control"
                                placeholder="Enter Course Name Here">
                        </div>

                        <div class="form-group">
                            <label for="level">Course Level</label>
                            <select id="level" name="level" class="form-control">
                                <option value="none">None</option>
                                <option value="Level 1">Level 1</option>
                                <option value="Level 2">Level 2</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="string">Course Duration</label>
                            <input type="string" name="duration" class="form-control"
                                placeholder="Enter Duration Here">
                        </div>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
    </div>
  </div>
</div>

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Course Id</th>
            <th>Course Name</th>
            <th>Course Level</th>
            <th>Course Duration</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $key=>$course)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$course->courseId}}</td>
            <td>{{$course->courseName}}</td>
            <td>{{$course->level}}</td>
            <td>{{$course->duration}}</td>
            <td>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

   
</table>
{{$courses->links()}}
</div>
</div>
</div>
</div>

</main>

@stop