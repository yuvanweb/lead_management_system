@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Hr Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Salary Paylist </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content pb-4">
  <div class="container-fluid">
    <form  method="POST" action="generate-payslip-pdf">
      @csrf
    <div class="row">
<div class="col"><h4>Select Date</h4></div>
<div class="col"><input type="month" class="form-control" name="date"  required></div>
<div class="col"><button type="submit" class="btn btn-danger text-right">Download Payslip</button></div>

    </div>
    </form>
    </div>
</section>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="card full-wd">
        <div class="card-header">
          <h3 class="card-title">Employee List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div id="app_pay">
          
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
  
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
 
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->


</section>

@endsection