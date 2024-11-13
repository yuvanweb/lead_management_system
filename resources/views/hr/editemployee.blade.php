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
          <li class="breadcrumb-item active">Purchase Details </li>
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
              <h3 class="card-title">Purchase List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Create Purchase</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  	

                <tr>
                  <th>#</th>
                  <th>Company</th>
                  <th>Plant</th>
                  <th>Date</th>
                  <th>Product </th>
                  <th>Type </th>
                  <th>Brand </th>
                 
                  <th>Qty</th> 
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>
                <tr>

                  

                  <td>1</td>
               
                  <td>Saro</td>
                  <td>VJN</td>
                  <td>8/7/2024</td>
                  <td>GP (Soft) Coil</td>
                  <td>Minimised</td>
                  <td></td>
                
                  <td>11.374</td>
                 
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr> 
                <tr>
                  <td>2</td>
               
                  <td>Saro</td>
                  <td>VJN</td>
                  <td>8/7/2024</td>
                  <td>GP (Soft) Coil</td>
                  <td>Minimised</td>
                  <td></td>
                
                  <td>11.374</td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>

                <tr>
                  <td>3</td>
               
                  <td>Saro</td>
                  <td>VJN</td>
                  <td>8/7/2024</td>
                  <td>GP (Soft) Coil</td>
                  <td>Minimised</td>
                  <td></td>
                
                  <td>11.374</td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Company</th>
                  <th>Plant</th>
                  <th>Date</th>
                  <th>Product </th>
                  <th>Type </th>
                  <th>Brand </th>
                 
                  <th>Qty</th> 
                  <th>Action</th> 
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