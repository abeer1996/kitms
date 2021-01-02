@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Payment Table </h1>
  
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
            <th>Payment Id</th>
            <th>Student Id</th>
            <th>Course Name</th>
            <th>Course Level</th>
            <th>Course Fee</th>
            <th>Payment Type</th>
            <th>Receive Payment</th>
            <th>Due Payment</th>
            <th>Transaction Id</th>
            <th>Action</th>
        </tr>
    </thead>
  
    </table>

</div>
</div>
</div>
</div>


</main>

@stop