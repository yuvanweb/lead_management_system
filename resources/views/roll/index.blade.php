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
          <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                 
                  @foreach ($role as $ro)
                  @php
                  $mod =" "; 
                @endphp
                  @if ($ro->role_management==1)
                  @php
                 $mod .= " Role Management,";
                 @endphp
                    
                  @endif
                  @if ($ro->user_management==1)

                  @php
                  $mod .= " User Management,";
                  @endphp
                    
                  @endif @if ($ro->lead_management==1)

                  @php
                  $mod .= " Lead Management,";
                  @endphp
                    
                  @endif @if ($ro->sales_management==1)

                  @php
                  $mod .= " Sales Management,";
                  @endphp
                    
                  @endif @if ($ro->purchase_management==1)

                  @php
                  $mod .= " Purchase Management,";
                  @endphp
                    
                  @endif @if ($ro->hr_management==1)

                  @php
                  $mod .= " Hr Management,";
                  @endphp
                    
                  @endif @if ($ro->customer_management==1)

                  @php
                  $mod .= " Customer Management,";
                  @endphp
                    
                  @endif @if ($ro->master_management==1)

                  @php
                  $mod .= " Master Management";
                  @endphp
                    
                  @endif

                
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$ro->role_name}}</td>
                    <td><p>{{$mod}}</p></td>
                    <td> 
                      
                      
                      
                      <button type="button" class="btn btn-primary btn-sm edit_role" value="{{$ro->id}}" data-toggle="modal" data-target="#modal-er">Edit </button>
                      <a href="/delete-role/{{$ro->id}}" class="btn btn-danger btn-sm delete_role" >Delete </a>
                      <button type="button" class="btn btn-primary btn-sm all_mod" value="{{$ro->id}}" data-toggle="modal" data-target="#modal-al">Allocate </button>
                    
                    
                    
                    </td>
                  </tr>
                    
                  @endforeach
              
            
              
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
              <h4 class="modal-title">Allocate Module</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="company" action="{{url('update-module')}}">
                @csrf
            <fieldset>
              <div class="form-group mr-3">
                <input type="hidden" id="role_id" name="role_id" value="">
                 @foreach ($module as $mod)
                  <div class="form-check">
                    <input class="form-check-input" id="{{$mod->field_name}}" name="{{$mod->field_name}}" type="checkbox">
                    <label class="form-check-label">{{$mod->module_name}}</label>
                  </div>
                  @endforeach
                 
                
                
                
               
              </div>
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Assign </button>
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
        <div class="modal-dialog  modal-dialog-center">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="company" action="{{url('add-role')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Role Name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="add_role" name="role_name" placeholder="Role" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Create </button>
                </div>
              </div>
              
              
            </fieldset>
             </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-er">
        <div class="modal-dialog  modal-dialog-center">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="company" action="{{url('update-role')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Role Name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="edit_role" name="role_name" placeholder="Role" required>
                  <input type="hidden" id="ed_id" name="id" value="">
                </div>
              </div>
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Update </button>
                </div>
              </div>
              
              
            </fieldset>
             </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


    </section>

@endsection