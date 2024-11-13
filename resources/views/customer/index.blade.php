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
          <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                  <th>GST Number </th>
                
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>
              @foreach ($customer as $cus)
              <tr>

                  

                <td>{{ $loop->index+1 }}</td>
             
                <td>{{$cus->customer_name}}</td>
                <td>{{$cus->customer_email}}</td>
                <td>{{$cus->customer_contact_no}}</td>
                <td>{{$cus->categorie_name}}</td>
                <td>{{$cus->gst_number==NULL?"Not-Assigned":$cus->gst_number}}</td>
               
               
              
                <td>

                  <button type="button" class="btn btn-primary btn-xs edit_customer"  data-toggle="modal" data-target="#modal-ced" value="{{$cus->id}}">Edit </button> 
                  <a type="button" class="btn btn-danger btn-xs delete_customer" href="/delete-customer/{{$cus->id}}">Delete </a>
                
               
                </td>
              </tr> 
                
              @endforeach
               
                      
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Email Id</th>
                  <th>Customer Number</th>
                  <th>Category </th>
                  <th>GST Number </th>
                
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
              <form method="POST"  action="{{url('add-customer')}}">
                @csrf
            <fieldset>
             
              <div class="form-group">
                <label for="exampleInputEmail1">Customer name </label>
                <div class="controls">
                  <input type="text" class="form-control"  name="name" placeholder="Customer Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
 <div class="form-group">
                <label for="exampleInputEmail1">Email Id  </label>
                <div class="controls">
                  <input type="email" class="form-control" name="primary_mail_id" placeholder="Customer Mail Id" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> <div class="form-group">
                <label for="exampleInputEmail1">GST number </label>
                <div class="controls">
                  <input type="text" class="form-control gst" id="gst" name="gst_number" placeholder="GST number " required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Primary contact number </label>
                <div class="controls">
                  <input type="text" class="form-control"  name="primary_contact_num" placeholder="Customer Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

   
       
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="exampleInputEmail1">Contact person name 2</label>
                    </div>
                    <div class="col">
                    <div class="controls">
                      <input type="text" class="form-control"  name="c_person_name_2" placeholder="Contact Person name 2" required>
                    <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                    </div>
                    </div>
                  <div class="col">
                <label for="exampleInputEmail1">Contact number 2</label>
                  </div>
                  <div class="col">
                <div class="controls">
                  <input type="text" class="form-control" name="c_person_number_2" placeholder="Contact number 2" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
             
                
              </div>
              </div>

                 
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="exampleInputEmail1">Contact person name 3</label>
                    </div>
                    <div class="col">
                    <div class="controls">
                      <input type="text" class="form-control" name="c_person_name_3" placeholder="Contact Person name 3" required>
                    <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                    </div>
                    </div>
                  <div class="col">
                <label for="exampleInputEmail1">Contact number 3</label>
                  </div>
                  <div class="col">
                <div class="controls">
                  <input type="text" class="form-control"  name="c_person_number_3" placeholder="Contact number 3" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
             
                
              </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <div class="controls">
                  <select class="custom-select form-control"  name="category" id="exampleSelectBorder">
                    <option>Select Category</option>
                    @foreach ($category as $cat)
                    <option value="{{$cat->id}}">{{$cat->categorie_name}}</option>
                    @endforeach
                  
                   
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

 
              <!--<div class="form-group">
                <label for="exampleInputEmail1">Customer unique code </label>
                <div class="controls">
                  <input type="text" class="form-control" id="created_by" name="created_by" placeholder="A001" readonly  value="A001" required>
               <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
              </div> -->
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
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-ced">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Customer Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('update-customer')}}">
                @csrf
            <fieldset>
             
              <div class="form-group">
                <label for="exampleInputEmail1">Customer Name </label>
                <div class="controls">
                  <input type="text" class="form-control"  id="customer_name" name="customer_name"  placeholder="Customer Name" required>
                  <input type="hidden" id="ed_id" name="id">  </div>
              </div>
 <div class="form-group">
                <label for="exampleInputEmail1">Email Id  </label>
                <div class="controls">
                  <input type="email" class="form-control"  id="customer_email"  name="primary_mail_id" placeholder="Customer Email" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> <div class="form-group">
                <label for="exampleInputEmail1">GST number  </label>
                <div class="controls">
                  <input type="text" class="form-control gst"  id="gst_number"  name="gst_number" placeholder="GST number" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
 <div class="form-group">
                <label for="exampleInputEmail1">Primary Contact number </label>
                <div class="controls">
                  <input type="text" class="form-control"  id="customer_contact_no"   name="primary_contact_num" placeholder="Customer Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

   
       
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="exampleInputEmail1">Contact person name 2</label>
                    </div>
                    <div class="col">
                    <div class="controls">
                      <input type="text" class="form-control"  id="customer_name_2"  name="c_person_name_2" placeholder="Contact Person name 2" required>
                    <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                    </div>
                    </div>
                  <div class="col">
                <label for="exampleInputEmail1">Contact number 2</label>
                  </div>
                  <div class="col">
                <div class="controls">
                  <input type="text" class="form-control"  id="customer_contact_no_2"  name="c_person_number_2" placeholder="Contact number 2" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
             
                
              </div>
              </div>

                 
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="exampleInputEmail1">Contact person name 3</label>
                    </div>
                    <div class="col">
                    <div class="controls">
                      <input type="text" class="form-control"  id="customer_name_3"  name="c_person_name_3" placeholder="Contact Person name 3" required>
                    <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                    </div>
                    </div>
                  <div class="col">
                <label for="exampleInputEmail1">Contact number 3</label>
                  </div>
                  <div class="col">
                <div class="controls">
                  <input type="text" class="form-control"  id="customer_contact_no_3"   name="c_person_number_3" placeholder="Contact number 3" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
                </div>
             
               
              </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="customer_categoty"   name="category" >
                    <option>Select Category</option>
                    @foreach ($category as $cat)
                    <option value="{{$cat->id}}">{{$cat->categorie_name}}</option>
                    @endforeach
                  
                   
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

 
          <!-- <div class="form-group">
                <label for="exampleInputEmail1">Customer code </label>
                <div class="controls">
                  <input type="text" class="form-control"  id="customer_unique_code"  name="customer_unique_code" placeholder="Customer code"   value="" required>
               <p class="help-block">Update Customer Code manualy</p>
                </div>
              </div> -->
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