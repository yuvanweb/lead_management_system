@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Customer Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Customer Details </li>
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
              <h3 class="card-title">Customer List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Create Customer</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  	

                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Email Id</th>
                  <th>Customer Number</th>
                  <th>Category </th>
                  <th>Customer Unique Code </th>
                
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>
                <tr>

                  

                  <td>1</td>
               
                  <td>Vijay</td>
                  <td>Vijay@gmail.com</td>
                  <td>9898878765</td>
                  <td>Appliance</td>
                  <td>CON001</td>
                
                 
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr> 
                <tr>
                  <td>2</td>
               
                  <td>ajay</td>
                  <td>ajay@gmail.com</td>
                  <td>9898878765</td>
                  <td>Appliance</td>
                  <td>CON002</td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>

                <tr>
                  <td>3</td>
               
                  <td>sanjay</td>
                  <td>sanjay@gmail.com</td>
                  <td>9898878765</td>
                  <td>Appliance</td>
                  <td>CON003</td>
                
                  <td> <button type="button" class="btn btn-primary btn-sm">View </button> <button type="button" class="btn btn-primary btn-sm">Edit </button></td>
                </tr>
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Email Id</th>
                  <th>Customer Number</th>
                  <th>Category </th>
                  <th>Customer Unique Code </th>
                
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
              <h4 class="modal-title">Customer Creation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
            <fieldset>
             
              <div class="form-group">
                <label for="exampleInputEmail1">Customer Name </label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Customer Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
 <div class="form-group">
                <label for="exampleInputEmail1">Email Id  </label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Customer Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
 <div class="form-group">
                <label for="exampleInputEmail1">Primary Contact number </label>
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Customer Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

   
       
              <div class="form-group">
                <div class="row">
                  <div class="col">
                <label for="exampleInputEmail1">Contact number 2</label>
                  </div>
                  <div class="col">
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Contact number 2" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
             
                <div class="col">
                <label for="exampleInputEmail1">Contact person name 2</label>
                </div>
                <div class="col">
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Contact Person name 2" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
              </div>
              </div>

                 
              <div class="form-group">
                <div class="row">
                  <div class="col">
                <label for="exampleInputEmail1">Contact number 3</label>
                  </div>
                  <div class="col">
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Contact number 3" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
             
                <div class="col">
                <label for="exampleInputEmail1">Contact person name 3</label>
                </div>
                <div class="col">
                <div class="controls">
                  <input type="text" class="form-control" id="cmobile" name="cmobile" placeholder="Contact Person name 3" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
              </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <div class="controls">
                  <select class="custom-select form-control" id="exampleSelectBorder">
                    <option>Select Category</option>
                    <option>Lifts and Elevators</option>
                    <option>False ceiling</option>
                    <option>Retail</option>
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

 
              <div class="form-group">
                <label for="exampleInputEmail1">Customer unique code </label>
                <div class="controls">
                  <input type="text" class="form-control" id="created_by" name="created_by" placeholder="A001" readonly  value="A001" required>
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