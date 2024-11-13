@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Master</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Form </li>
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
              <h3 class="card-title">Form List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Add</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  	

                <tr>
                  <th>#</th>
                  <th>Form</th>
                  <th  class="td">Action</th> 
                </tr>
              </thead>
            <tbody>
              @foreach ($form as  $frm)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{$frm->form_name}}</td>
                <td  class="td"> 
                  <button type="button" class="btn btn-primary btn-sm edit_form"  data-toggle="modal" data-target="#modal-ced" value="{{$frm->id}}">Edit </button> 
                  <a type="button" class="btn btn-danger btn-sm delete_form" href="/delete-form/{{$frm->id}}">Delete </a>
                
                </td>
            </tr>
                
              @endforeach
            
             
              
                </tbody>
                <tfoot>
                  <tr>
                  <th>#</th>
                  <th>Form</th>
                  <th  class="td">Action</th> 
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
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="company" action="{{url('add-form')}}">
                @csrf
            <fieldset>
             
              <div class="form-group">
                <label for="exampleInputEmail1">Form Form</label>
                <div class="controls">
                  <input type="text" class="form-control" id="created_by" name="form_name" placeholder="Form Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 

              

               <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Create</button>
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

      <div class="modal fade" id="modal-ced">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form method="POST" id="company" action="{{url('update-form')}}">
              @csrf
            <fieldset>
             
              <div class="form-group">
                <label for="exampleInputEmail1">Form Name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="edit_form_name" name="form_name" placeholder="Form Name" required>
                  <input type="hidden" id="ed_id" name="id" value="">
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 

         

               <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Update</button>
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