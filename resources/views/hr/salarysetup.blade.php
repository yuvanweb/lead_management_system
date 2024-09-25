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
          <li class="breadcrumb-item active">Salary Setup </li>
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
          <h3 class="card-title">Role List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped">
            <thead>
                

            <tr>
              <th>#</th>
              <th>Role</th>
           
             
              <th>Action</th> 
            </tr>
          </thead>
        <tbody>
            <tr>

              

           
              <td>1</td>
              <td>Sales Rep</td>
                     
            
              <td> <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#modal-lg"> Salary Setup</button></td>  </tr> 
            <tr>

              

              <td>2</td>
           
            
              <td>Hr</td>
            
             
            
              <td> <button href="#" type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#modal-lg"> Salary Setup</button></td>  
            </tr> 
            <tr>

              

              <td>3</td>
           
        
              <td>Accounts</td>
                    
             
              <td> <button href="#" type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#modal-lg"> Salary Setup</button></td>  
            </tr> 
         
          
            </tbody>
            <tfoot>
            <tr>
              <th>#</th>
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
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Salary Setup</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form>
        <fieldset>
         
          <div class="form-group">
            <label for="exampleInputEmail1">Basic Salary</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Basic Salary" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="form-group">
            <label for="exampleInputEmail1">House Rent Allowance</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" placeholder="House Rent Allowance" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="form-group">
            <label for="exampleInputEmail1">Leave Travel Allowance</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Leave Travel Allowance" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="form-group">
            <label for="exampleInputEmail1">Medical + Conveyance</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Medical + Conveyance" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="form-group">
            <label for="exampleInputEmail1">Statutory Bonus Salary</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Statutory Bonus Salary" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="form-group">
            <label for="exampleInputEmail1">Tax Detucted at Source</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Tax Detucted at Source" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="form-group">
            <label for="exampleInputEmail1">Provident Fund</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Provident Fund" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="form-group">
            <label for="exampleInputEmail1">Total CTC</label>
            <div class="controls">
              <input type="text" class="form-control" id="created_by" name="created_by" readonly placeholder="Total CTC" required>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

       

           <div class="form-group">
            <!-- Button -->
            <div class="controls">
              <button type="button" class="btn btn-primary">Create</button>
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