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
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Lead Report </li>
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
              <h3 class="card-title">Lead report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Created By</th>
                  <th>Customer Name</th>
                  <th>Date</th>
                  <th>Item Enquired  </th>
                  <th>Qnt</th>
                  <th>Price</th>
                  <th>Lead Source </th>
                  <th>Status </th>
                 
                 
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Dinesh</td>
                  <td>Ramesh</td>
                  <td>11-09-2024</td>
                  <td>GP (Soft) Coil PPGI Coil</td>
                  <td>50</td>
                  <td>₹ 5000</td>
                  <td>Existing customer</td>
                  <td><p class="text-success">Converted</p></td>
               </tr>
                <tr>
                  <td>2</td>
                  <td>Dinesh</td>
                  <td>Ramesh</td>
                  <td>11-09-2024</td>
                  <td>GP (Soft) Coil PPGI Coil</td>
                  <td>50</td>
                  <td>₹ 5000</td>
                  <td>Existing customer</td>
                  <td><p class="text-warning">Pending</p></td>
                
                </tr>
                <tr>
                  <td>3</td>
                  <td>Dinesh</td>
                  <td>Ramesh</td>
                  <td>11-09-2024</td>
                  <td>GP (Soft) Coil PPGI Coil</td>
                  <td>50</td>
                  <td>₹ 5000</td>
                  <td>Existing customer</td>
                  <td><p class="text-success">Converted</p></td>
                
              </tr>
               
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Created By</th>
                  <th>Customer Name</th>
                  <th>Date</th>
                  <th>Item Enquired  </th>
                  <th>Qnt</th>
                  <th>Price</th>
                  <th>Lead Source </th>
                  <th>Status </th>
                 
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