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
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Hr Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <div class="col-md-4">
          <div class="info-box col-mb-3 bg-warning">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Employee</span>
              <span class="info-box-number">50</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="far fa-heart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Admin</span>
              <span class="info-box-number">1</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-danger">
            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sub Admin</span>
              <span class="info-box-number">3</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-info">
            <span class="info-box-icon"><i class="far fa-comment"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales Rep</span>
              <span class="info-box-number">21</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-8">
         
          <div class="card">
          <div class="card-head text-center">
            Employee
          </div>
          <div class="card-body">
            <canvas id="pieChartHrm" style="min-height: 300px; height: 300px; max-height: 550px; max-width: 100%;"></canvas>
          </div>
        </div>
        </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->











    </section>
<script>
  var donutDataHrm        = {
      labels: [
          'Admin',
          'Sub Admin',
          'Accounts',
          'Sales Rep',
          'HR',
        
         
      ],
      datasets: [
        {
          data: [1,2,3,20,2],
          backgroundColor : [ '#00a65a', '#f39c12', '#32a852', '#3263a8', '#a8329e'],
        }
      ]
    }
  
   
</script>
@endsection