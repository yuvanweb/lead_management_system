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
          <li class="breadcrumb-item active">Sales Details </li>
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
              <h3 class="card-title">Sales List</h3><a class="btn btn-primary fl_right px-1" href="/sales-add">Create Sales</a> <a class="btn btn-success fl_right  px-1" href="/sales-excel">Import Excel</a>
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
                  <th>GST Number</th> 
                  <th>Qty</th> 
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>
                @foreach ($sales as $sa)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{$sa->sales_date}}</td>
                  <td>{{$sa->company_name}}</td>
                  <td>{{$sa->unit_name}}</td>
                  <td>{{$sa->product_name}}</td>
                  <td>{{$sa->type_name}}</td>
                  <td>{{$sa->form_name}}</td>
                
                  <td>{{$sa->customer_name}}</td>
                  <td>{{$sa->gst_number}}</td>
                  <td>{{$sa->qnt}}</td>
                
                  <td> 
              
                    <a type="button" class="btn btn-primary btn-xs " href="/edit-sales/{{$sa->id}}">Edit </a> 
                    <a type="button" class="btn btn-danger btn-xs delete_sales" href="/delete-sales/{{$sa->id}}">Delete </a>
                  
                  </td>
                </tr>
                @endforeach
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
                  <th>GST Number</th> 
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
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->





    </section>

@endsection