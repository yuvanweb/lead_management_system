@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">User Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">User Management </li>
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
              <h3 class="card-title">User List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Add</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Role</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Ramesh</td>
                  <td>ramesh@gmail.com</td>
                  <td>9578884881</td>
                  <td>Sub Admin</td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Suresh</td>
                  <td>suresh@gmail.com</td>
                  <td>9578884884</td>
                  <td>User</td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Dinesh</td>
                  <td>dinesh@gmail.com</td>
                  <td>9578884888</td>
                  <td>Hr</td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>
               
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Role</th>
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
              <h4 class="modal-title">Add User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              
              <div class="form-group">
                <label for="exampleInputEmail1">User Email</label>
                <div class="controls">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">User Mobile</label>
                <div class="controls">
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Select Role</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Role</option>
                    <option>Sub Admin</option>
                    <option>User</option>
                    <option>Hr</option>
                    <option>Accounts</option>
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