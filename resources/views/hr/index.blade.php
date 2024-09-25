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
          <li class="breadcrumb-item active">Employee </li>
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
              <h3 class="card-title">Employee List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  	

                <tr>
                  <th>#</th>
                  <th>Employee Name</th>
                  <th>Employee Id</th>
                  <th>Email Id</th>
                  <th>Mobile</th>
                  <th>Role </th>
                  <th>Join Date </th>
                 
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>
                <tr>

                  

                  <td>1</td>
               
                  <td>Saro</td>
                  <td>EMP001</td>
                  <td>Saro@gmail.com</td>
                  <td>9898987676</td>
                  <td>Sales Rep</td>
                  <td>11-sep-2024</td>
                
                 
                
                  <td> <a href="/hr-viewemployee" type="button" class="btn btn-primary btn-sm">View | Edit</a></td>  </tr> 
                <tr>

                  

                  <td>2</td>
               
                  <td>Maro</td>
                  <td>EMP002</td>
                  <td>Maro@gmail.com</td>
                  <td>9898987676</td>
                  <td>Sales Rep</td>
                  <td></td>
                
                 
                
                  <td> <a href="/hr-viewemployee" type="button" class="btn btn-primary btn-sm">View | Edit</a></td>
                </tr> 
                <tr>

                  

                  <td>3</td>
               
                  <td>Garo</td>
                  <td>EMP003</td>
                  <td>Garo@gmail.com</td>
                  <td>9898987676</td>
                  <td>Sales Rep</td>
                  <td>11-sep-2024</td>
                
                 
                
                  <td> <a href="/hr-viewemployee" type="button" class="btn btn-primary btn-sm">View | Edit</a></td>   </tr> 
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Employee Name</th>
                  <th>Employee Id</th>
                  <th>Email Id</th>
                  <th>Mobile</th>
                  <th>Role </th>
                  <th>Join Date </th>
                 
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