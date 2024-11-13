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
          <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                  <th>Employee Id</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Company</th>
                  <th>Location</th>
                  <th>Role</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                  @php
                    //print_r(Auth::user()->role);
                  @endphp
                  @foreach ($user as  $us)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->employee_id}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->mobile}}</td>
                    <td>{{$us->role_name}}</td>
                    <td>{{$us->company_name}}</td>
                    <td>{{$us->location_name}}</td>
                    <td  class="td"> 
                      <button type="button" class="btn btn-primary btn-sm edit_user"  data-toggle="modal" data-target="#modal-ced" value="{{$us->id}}">Edit </button> 
                      <a type="button" class="btn btn-danger btn-sm delete_user" href="/delete-user/{{$us->id}}">Delete </a>
                    
                    </td>
                </tr>
                    
                  @endforeach
                           
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Employee Id</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Role</th>
                  <th>Company</th>
                  <th>Location</th>
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
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{url('add-user')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <div class="controls">
                  <input type="text" class="form-control" name="name" placeholder="Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              
              <div class="form-group">
                <label for="exampleInputEmail1">User Email</label>
                <div class="controls">
                  <input type="text" class="form-control"  name="email" placeholder="Email" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">User Mobile</label>
                <div class="controls">
                  <input type="text" class="form-control"  name="mobile" placeholder="Mobile" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Select Role</label>
                <div class="controls">
                  <select class="custom-select form-control" name="role" id="exampleSelectBorder">
                    <option value="">Select Role</option>
                    @foreach ($role as $rol)
                    <option value="{{$rol->id}}">{{$rol->role_name}}</option> 
                    @endforeach
                </select>
               </div>
              </div><div class="form-group">
                <label for="exampleInputEmail1">Select Company</label>
                <div class="controls">
                  <select class="custom-select form-control" name="company" id="exampleSelectBorder">
                    <option value="">Select Company</option>
                    @foreach ($company as $com)
                    <option value="{{$com->id}}">{{$com->company_name}}</option> 
                    @endforeach
                </select>
               </div>
              </div><div class="form-group">
                <label for="exampleInputEmail1">Select Location</label>
                <div class="controls">
                  <select class="custom-select form-control" name="location" id="exampleSelectBorder">
                    <option value="">Select Location</option>
                    @foreach ($location as $loc)
                    <option value="{{$loc->id}}">{{$loc->location_name}}</option> 
                    @endforeach
                </select>
               </div>
              </div>
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Save </button>
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



      <div class="modal fade" id="modal-ced">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('update-user')}}">
                @csrf
            <fieldset>
              <input type="hidden" id="ed_id" name="id">
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
                  <select class="custom-select form-control"  id="role"  name="role" required>
                    <option value="">Select Role</option>
                    @foreach ($role as $rol)
                    <option value="{{$rol->id}}">{{$rol->role_name}}</option> 
                    @endforeach
                </select>
               </div>
              </div><div class="form-group">
                <label for="exampleInputEmail1">Select Company</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="company"  name="company" required>
                    <option value="">Select Company</option>
                    @foreach ($company as $com)
                    <option value="{{$com->id}}">{{$com->company_name}}</option> 
                    @endforeach
                </select>
               </div>
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Select Location</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="location"  name="location" required >
                    <option value="">Select Location</option>
                    @foreach ($location as $loc)
                    <option value="{{$loc->id}}">{{$loc->location_name}}</option> 
                    @endforeach
                </select>
               </div>
              </div> 
              
              
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Employee Id</label>
                <div class="controls">
                  <input type="text" class="form-control" id="employee" name="employee" required>
               <p class="help-block text-danger">You want to edit employee id manualy id there any changes in employee id</p>
               
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
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



    </section>

@endsection