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
          <li class="breadcrumb-item active">Lead Management </li>
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
              <h3 class="card-title">Lead List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Create Lead</button>
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
                  <th>Lead Source </th>
                  <th>Status </th>
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>Dinesh</td>
                  <td>Ramesh</td>
                  <td>11-09-2024</td>
                  <td>GP (Soft) Coil PPGI Coil</td>
                
                  <td>Existing customer</td>
                  <td><p class="text-warning">Pending</p></td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr> <tr>
                  <td>2</td>
                  <td>Dinesh</td>
                  <td>Ramesh</td>
                  <td>11-09-2024</td>
                  <td>GP (Soft) Coil PPGI Coil</td>
                
                  <td>Existing customer</td>
                  <td><p class="text-warning">Pending</p></td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Dinesh</td>
                  <td>Ramesh</td>
                  <td>11-09-2024</td>
                  <td>GP (Soft) Coil PPGI Coil</td>
              
                  <td>Existing customer</td>
                  <td><p class="text-success">Converted</p></td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
               </tr>
               
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Created By</th>
                  <th>Customer Name</th>
                  <th>Date</th>
                  <th>Item Enquired  </th>
                  <th>Lead Source </th>
                  <th>Status </th>
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
              <h4 class="modal-title">Lead Creation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Lead created by</label>
                <div class="controls">
                  <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Lead created by" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer email</label>
                <div class="controls">
                  <input type="text" class="form-control" id="cemail" name="cemail" placeholder="Customer email" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Customer contact no</label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Customer contact no" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Item enquired </label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Item enquired" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Price quoted </label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Price quoted" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">Qty </label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Qty" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">Select Role</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Role</option>
                    <option>Existing customer</option>
                    <option>User</option>
                    <option>Hr</option>
                    <option>Accounts</option>
                    <option>Sales Rep</option>
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="button" class="btn btn-primary">Save </button>
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