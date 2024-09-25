@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Role Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Role Management </li>
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
              <h3 class="card-title">Role List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Add</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Role Name</th>
                  <th>Module</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Sub Admin</td>
                  <td>Lead Management, Sales Management, Purchase Management</td>
                  <td> <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal-al">Allocate </button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>User</td>
                  <td>Lead Management, Sales Management, Purchase Management</td>
                  <td> <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#modal-al">Allocate </button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Hr
                  </td>
                  <td>Hr Management</td>
                  <td> <button type="button" class="btn btn-primary btn-sm"   data-toggle="modal" data-target="#modal-al">Allocate </button></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Account
                  </td>
                  <td>Hr Management, Client Management</td>
                  <td> <button type="button" class="btn btn-primary btn-sm"   data-toggle="modal" data-target="#modal-al">Allocate </button></td>
                </tr>
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Role Name</th>
                  <th>Module</th>
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




      <div class="modal fade" id="modal-al">
        <div class="modal-dialog modal-sm modal-dialog-center">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Allocate Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
            <fieldset>
              <div class="form-group mr-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">User Management</label>
                </div><div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Lead Management</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" checked>
                  <label class="form-check-label">Sales Management</label>
                </div> <div class="form-check">
                  <input class="form-check-input" type="checkbox" checked>
                  <label class="form-check-label">Purchase Management</label>
                </div> <div class="form-check">
                  <input class="form-check-input" type="checkbox" checked>
                  <label class="form-check-label">Hr Management</label>
                </div><div class="form-check">
                  <input class="form-check-input" type="checkbox" checked>
                  <label class="form-check-label">Customer Management</label>
                </div>
              </div>
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="button" class="btn btn-primary">Assign </button>
                </div>
              </div>
              
              
            </fieldset>
             </form>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg modal-dialog-center">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Role Name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="Role" name="Role" placeholder="Role" required>
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