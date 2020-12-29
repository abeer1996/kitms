@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Role Table</h1>
  
        </div>
      </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Role</button>

  <!-- <a style="float: right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New Role</a> <br><br><br>  -->

  


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form method="post" action="{{route('role.store')}}">
      @csrf

  <div class="form-group">
    <label for="digit">Role Id</label>
    <input type="digit" name="roleId" class="form-control"  placeholder="Enter Role Id">
  </div>

  <div class="form-group">
    <label for="string">Role Name</label>
    <input type="string" name="name" class="form-control"  placeholder="Enter Role Name">
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
            <th>Role Id</th>
            <th>Role Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($roles as $key=>$role)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$role->role_id}}</td>
            <td>{{$role->name}}</td>
            <td>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</div>
</main>

@stop