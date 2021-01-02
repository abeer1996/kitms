@extends('Backend.master')
@section('main')

<main class="app-content">


<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> User Information Table </h1>
  
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
            <th>User Name</th>
            <th>Password</th>
            <th>Role</th>
            <th>Status</th>
        </tr>
    </thead>
  
    </table>

</div>
</div>
</div>
</div>


</main>

@stop