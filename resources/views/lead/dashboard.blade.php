@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Lead Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Lead Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section >
  <div class="container">
    <div class="card">
      <div class="card-body">
    <div class="row">
      
        <div class="col-md-4 "><h4>Select Month</h4></div>
        <div class="col-md-4 "><input type="date" class="form-control" name="lead_d" id="lead_d"  ></div>
        <div class="col-md-4 "><button class="btn btn-primary float-right" id="lead_dash">submit</button></div>
       
    
    </div>
    </div>
    </div>
    </div>
    
  </section>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        
           <div class="row">
          
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
          <div class="info-box col-mb-3 bg-warning">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Lead</span>
              <span class="info-box-number" id="tlc"><?=$totalleadcount?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="fas fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" id="cmt">Current Month Lead</span>
              <span class="info-box-number" id="clc"><?=$currentleadcount?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-danger">
            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Leads From Existing Customers</span>
              <span class="info-box-number" id="elc"><?=$exleadcount?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-info">
            <span class="info-box-icon"><i class="far fa-comment"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Leads From New Customers</span>
              <span class="info-box-number" id="nlc"><?=$nwleadcount?></span>
            </div>
            <!-- /.info-box-content -->
          </div> 
        </div>
        </div>
        </div>
        <div class="col-md-8">
          <div class="card">
          <div class="card-body">
            <div id="piechart_3d" style="width: 100%; height: 375px;"></div>
           </div>
        </div>
        </div>
        </div>
        <!-- /.row -->
      
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Status', 'Total'],
            ['Pending',     <?=(int)$status['cnt_n_lead']?>],
            ['Converted',      <?=(int)$status['cnt_c_lead']?>],
            ['Non Converted',  <?=(int)$status['cnt_nc_lead']?>],
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
  var donutData        = {
      labels: [
          'Converted',
          'Pending',
          'Not Converted',
         
      ],
      datasets: [
        {
          data: [40,30,30],
          backgroundColor : [ '#00a65a', '#f39c12','#f56954'],
        }
      ]
    }
  
</script>
@endsection