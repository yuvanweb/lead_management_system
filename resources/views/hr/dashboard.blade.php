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
              <span class="info-box-number">{{$total[0]->tot}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

        @foreach ($user as $item)
            
    
          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="far fa-heart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{$item->role_name}}</span>
              <span class="info-box-number">{{$item->tot}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          @endforeach
          <!-- /.info-box -->
         
          <!-- /.info-box -->
        
        </div>
        <div class="col-md-8">
         
          <div class="card">
          <div class="card-head text-center">
            Employee
          </div>
          <div class="card-body">
            <div id="piechart_3d" style="width: 100%; height: 375px;"></div>
            </div>
        </div>
        </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Status', 'Total'],
            @foreach ($user as $item)

            ['{{$item->role_name}}',     <?=(int)$item->tot?>],
            @endforeach
         
           
          ]);
  
          var options = {
         
            is3D: true,
            title: 'Over All Lead Status',
            legend:{position: 'top', textStyle: {color: 'blue', fontSize: 16}},
            slices: {0: {color: '#440589'}, 1:{color: '#058986'}, 2:{color: '#900C3F'}}
          };
  
          var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
          chart.draw(data, options);
        }
      </script>









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