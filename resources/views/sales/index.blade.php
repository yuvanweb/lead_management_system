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
          <li class="breadcrumb-item"><a href="/">Home</a></li>
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
              <h3 class="card-title">Sales List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Create Sales</button>
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
                  <th>Action</th> 
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
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
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
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
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
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
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




      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sales Creation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <div class="controls">
                  <input type="date" class="form-control" id="created_by" name="created_by" placeholder="Date" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1">Company</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Company</option>
                    <option>Saro</option>
                    <option>SAR</option>
                    <option>SPSN</option>
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Unit</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Unit</option>
                    <option>Vallam</option>
                    <option>MER</option>
                    <option>SGU</option>
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Product</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Product</option>
                    <option>GP Coil</option>
                    <option>PPGL Coil</option>
                 
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>  
              
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Type</option>
                    <option>Minimised</option>
                    <option>Regular</option>
                    <option>Off whtite</option>
                </select>
                </div>
              </div>

               
              
              <div class="form-group">
                <label for="exampleInputEmail1">Form</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Form</option>
                    <option>CTL</option>
                    <option>Profile sheet</option>
                    <option>Blanks</option>
                </select>
                </div>
              </div>

                 
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Customer</option>
                    <option>Fujitec</option>
                    <option>Teja Projects</option>
                    <option>Irfana Steel</option>
                </select>
                </div>
              </div>

                               
              
            
              

              <div class="form-group">
                <label for="exampleInputEmail1">Customer code</label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Customer code" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Qnt </label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Qnt" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Sales Rep</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Rep</option>
                    <option>Ramesh</option>
                    <option>Suresh</option>
                </select>  </div>
              </div>



              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="button" class="btn btn-primary">Create </button>
                </div>
              </div>
              
              
            </fieldset>
             </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>







    </section>

@endsection