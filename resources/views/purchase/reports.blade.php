@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Sales Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Sales Report </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="card full-wd">
            <div class="card-header">
              <h3 class="card-title">Sales report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Company</th>
                  <th>Unit</th>
                  <th>Product </th>
                  <th>Type </th>
                  <th>Form </th>
                  <th>Customer</th> 
                  <th>Customer code</th> 
                  <th>Qty</th> 
                  <th>Sales Rep</th> 
                 
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>11-9-2024</td>
                  <td>Saro</td>
                  <td>Vallam</td>
                  <td>GP Coil</td>
                  <td>Minimised</td>
                  <td>CTL</td>
                
                  <td>Fujitec</td>
                  <td>A001</td>
                  <td>23.6</td>
                
                  <td>Ramesh</td>
                </tr> 
                <tr>
                  <td>2</td>
                  <td>11-9-2024</td>
                  <td>Saro</td>
                  <td>Vallam</td>
                  <td>GP Coil</td>
                  <td>Minimised</td>
                  <td>CTL</td>
                
                  <td>Fujitec</td>
                  <td>A001</td>
                  <td>23.6</td>
                
                  <td>Ramesh</td>
                 </tr>

                <tr>
                  <td>3</td>
                  <td>11-9-2024</td>
                  <td>Saro</td>
                  <td>Vallam</td>
                  <td>GP Coil</td>
                  <td>Minimised</td>
                  <td>CTL</td>
                
                  <td>Fujitec</td>
                  <td>A001</td>
                  <td>23.6</td>
                
                  <td>Ramesh</td>
                </tr>
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Company</th>
                  <th>Unit</th>
                  <th>Product </th>
                  <th>Type </th>
                  <th>Form </th>
                  <th>Customer</th> 
                  <th>Customer code</th> 
                  <th>Qty</th> 
                  <th>Sales Rep</th> 
                </tr>
                </tfoot>
              </table>
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