@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Purchase Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Purchase Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section >
  <div class="container">
    <form method="POST" id="company" action="{{url('purchase-month-dashboard')}}">
      @csrf
    <div class="card">
      <div class="card-body">
    <div class="row">
      
        <div class="col-md-4 "><h4>Select Month</h4></div>
        <div class="col-md-4 "><input type="month" class="form-control" name="date"   required></div>
        <div class="col-md-4 "><button  type= "submit" class="btn btn-primary float-right" >submit</button></div>
       
    
    </div>
    </div>
    </div>
  </form>
    </div>
    
  </section>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        
           <div class="row">
          
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">

                <div class="info-box mb-3 bg-info">
                  <span class="info-box-icon"><i class="far fa-comment"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">Total Purchase</span>
                    <span class="info-box-number" id="tlc">{{$total_qty[0]->qunty==null?0:$total_qty[0]->qunty}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div> 
@foreach ($comp_qty as $cmp)
  

          <div class="info-box col-mb-3 bg-warning">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Current Month Purchase in {{$cmp->company_name}}</span>
              <span class="info-box-number" id="tlc">{{$cmp->qunty}}</span>
            
            </div>
            <!-- /.info-box-content -->
          </div>

          @endforeach
          <!-- /.info-box -->
         <!-- <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="fas fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" id="cmt">Current Month Sales in SAR</span>
              <span class="info-box-number" id="clc"><?="0"?></span>
            </div>
           
          </div>
        
          <div class="info-box mb-3 bg-danger">
            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Current Month Sales in SASN</span>
              <span class="info-box-number" id="elc"><?="0"?></span>
            </div>
           
          </div>-->
          
        
        </div>
        </div>
        </div>
        <div class="col-md-8">
          <div class="card">
          <div class="card-body">
           <!-- <input type="hidden" id="prod_det" value="">-->
            <div id="piechart_3d" style="width: 100%; height: 375px;"></div>
           </div>
        </div>
        </div>
        </div>
        <!-- /.row -->
        <div class="row">
          
          <div class="col-md-6">  <div class="card">
            <div class="card-body"> <div id="dual_x_div"  style="width: 100%; height: 375px;"></div>
          </div>
          </div>
          </div>
         
         
          
            
          <div class="col-md-6">  <div class="card">
            <div class="card-body">  

              <div id="barchart_values"  style="width: 100%; height: 375px;"></div>

            </div>      
            </div>      
                 
        
        </div>
        </div>
        
        
        <div class="row">
          
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">  
  
                <div id="gp_diff_type"  style="width: 100%; height: 375px;"></div>
  
              </div>      
              </div>  

          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">  
  
                <div id="pplg_dif_type"  style="width: 100%; height: 375px;"></div>
  
              </div>      
              </div>    
          </div>      
        
        </div> 
    </section>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

     google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(pplg_dif_type);
      function pplg_dif_type() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Total'],
          @foreach ($gpgl_diff_type as $gpgl_diff)
          ['{{$gpgl_diff->type_name}}', {{$gpgl_diff->s_qunty}}],
          @endforeach
          
        ]);

        var options = {
        //  title: 'My Daily Activities',
          is3D: true,
          title: 'sales for PPGL for different types',
          legend:{position: 'top', textStyle: {color: 'blue', fontSize: 16}},
          slices: {0: {color: '#440589'}, 1:{color: '#058986'}, 2:{color: '#900C3F'}}
        };

        var chart = new google.visualization.PieChart(document.getElementById('pplg_dif_type'));
        chart.draw(data, options);
      }
     
////////////////////////////////////////////////////////////////////////
 google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(gp_diff_type);
      function gp_diff_type() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Total'],
          @foreach ($gp_diff_type as $gp_diff)
          ['{{$gp_diff->type_name}}', {{$gp_diff->s_qunty}}],
          @endforeach
        ]);

        var options = {
        //  title: 'My Daily Activities',
          is3D: true,
          title: 'Purchase for GP for different types',
          legend:{position: 'top', textStyle: {color: 'blue', fontSize: 16}},
          slices: {0: {color: '#440589'}, 1:{color: '#058986'}, 2:{color: '#900C3F'}}
        };

        var chart = new google.visualization.PieChart(document.getElementById('gp_diff_type'));
        chart.draw(data, options);
      }

////////////////////////////////////////////////////////////////////////


   google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Product', 'Total'],
       
          @foreach ($prod_qty as $pr)
          ['{{$pr->product_name}}',{{$pr->qunty}}], 
          @endforeach
        ]);

       
      
        var options = {
        //  title: 'My Daily Activities',
          is3D: true,
          title: 'current month Purchase Product',
          legend:{position: 'top', textStyle: {color: 'blue', fontSize: 16}},
          slices: {0: {color: '#440589'}, 1:{color: '#058986'}, 2:{color: '#900C3F'}}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }



////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////

    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawCharts);
    function drawCharts() {
      var data = google.visualization.arrayToDataTable([
        @if (sizeof($product_type)>0)
        ["Element", "Density", { role: "style" } ],

@foreach ($product_type as $pt)
        ["{{$pt->product_name}}",{{$pt->qunty==""?0:$pt->qunty}}, "#b87333"],  
        @endforeach
@endif
        
       
       
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Product month sales",
       
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }

///////////////////////////////////////////////////////////////////////////////////

google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(gp_diff_brands);
      function gp_diff_brands() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Total'],
          @foreach ($brand as $bn)
          ['{{$bn->brand_name}}', {{$bn->s_qunty}}],
          @endforeach
         
        ]);

        var options = {
        //  title: 'My Daily Activities',
          is3D: true,
          title: 'PPGL for different brands',
          legend:{position: 'top', textStyle: {color: 'blue', fontSize: 16}},
          slices: {0: {color: '#440589'}, 1:{color: '#058986'}, 2:{color: '#900C3F'}}
        };

        var chart = new google.visualization.PieChart(document.getElementById('gp_diff_brands'));
        chart.draw(data, options);
      }

      /////////////////////////////////////////////////////////////
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(unit_wise);
      function unit_wise() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Total'],
          @foreach ($unit as $un)
          ['{{$un->unit_name}}', {{$un->s_qunty}}],
          @endforeach
         
        ]);

        var options = {
        //  title: 'My Daily Activities',
          is3D: true,
          title: 'Unit wise Purchase',
          legend:{position: 'top', textStyle: {color: 'blue', fontSize: 16}},
          slices: {0: {color: '#440589'}, 1:{color: '#058986'}, 2:{color: '#900C3F'}}
        };

        var chart = new google.visualization.PieChart(document.getElementById('unit_wise'));
        chart.draw(data, options);
      }
      ///////////////////////////////////////////////////////////////////////
    
 
    </script>
@endsection