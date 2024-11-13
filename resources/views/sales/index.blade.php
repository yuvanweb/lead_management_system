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
          <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <h3 class="card-title">Sales List</h3><button class="btn btn-primary fl_right px-1" data-toggle="modal" data-target="#modal-lg">Create Sales</button> <a class="btn btn-success fl_right  px-1" href="/sales-excel">Upload Excel</a>
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
                @foreach ($sales as $sa)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{$sa->sales_date}}</td>
                  <td>{{$sa->company_name}}</td>
                  <td>{{$sa->unit_name}}</td>
                  <td>{{$sa->product_name}}</td>
                  <td>{{$sa->type_name}}</td>
                  <td>{{$sa->form_name}}</td>
                
                  <td>{{$sa->customer_name}}</td>
                  <td>{{$sa->customer_name}}</td>
                  <td>{{$sa->qnt}}</td>
                
                  <td> 
              
                    <button type="button" class="btn btn-primary btn-xs edit_sales"  data-toggle="modal" data-target="#modal-edt" value="{{$sa->id}}">Edit </button> 
                    <a type="button" class="btn btn-danger btn-xs delete_sales" href="/delete-sales/{{$sa->id}}">Delete </a>
                  
                  </td>
                </tr>
                @endforeach
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
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sales Creation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('add-sales')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <div class="controls">
                  <input type="date" class="form-control" name="date" placeholder="Date" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1">Company</label>
                <div class="controls">
                  <select class="custom-select form-control" name="company"  >
                    <option value="">Select Company</option>
                    @foreach ($company as $com)
                    <option value="{{$com->id}}">{{$com->company_name}}</option>
                    @endforeach
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Unit</label>
                <div class="controls">
                  <select class="custom-select form-control"  name="unit">
                    <option value="">Select Unit</option>
                    @foreach ($unit as $unt)
                    <option value="{{$unt->id}}">{{$unt->unit_name}}</option>
                    @endforeach
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Product</label>
                <div class="controls">
                  <select class="custom-select form-control"  name="product" >
                    <option value="">Select Product</option>
                    @foreach ($product as $prd)
                    <option value="{{$prd->id}}">{{$prd->product_name}}</option>
                    @endforeach
                 
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>  
              
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <div class="controls">
                 <!-- <input type="text" class="form-control" name="type" placeholder="Type" required>-->
                  <select class="custom-select form-control"   name="type" required>
                    <option value="">Select Type</option>
                    @foreach ($type as $typ)
                    <option value="{{$typ->id}}">{{$typ->type_name}}</option>
                    @endforeach
                 
                
                  </select>
                </div>
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Color</label>
                <div class="controls">
                  <select class="custom-select form-control" name="color" >
                    <option value="">Select Color</option>
                    @foreach ($colors as $col)
                    <option value="{{$col->id}}">{{$col->color_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>

               
              
              <div class="form-group">
                <label for="exampleInputEmail1">Brand</label>
                <div class="controls">
                  <select class="custom-select form-control"  name="brand" >
                    <option value="">Select Form</option>
                    @foreach ($brand as $bnd)
                    <option value="{{$bnd->id}}">{{$bnd->brand_name}}</option>
                    @endforeach
                </select>
                </div>
              </div> <div class="form-group">
                <label for="exampleInputEmail1">Form</label>
                <div class="controls">
                  <select class="custom-select form-control"  name="form" >
                    <option value="">Select Form</option>
                    @foreach ($form as $fom)
                    <option value="{{$fom->id}}">{{$fom->form_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>

                 
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer</label>
                <div class="controls">
                  <select class="form-control select2"  name="customer" >
                    <option value="">Select Customer</option>
                    @foreach ($customer as $cus)
                    <option value="{{$cus->id}}">{{$cus->customer_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>

                               
              
            
              

              <div class="form-group">
                <label for="exampleInputEmail1">Customer code</label>
                <div class="controls">
                  <input type="text" class="form-control" readonly name="ccode" placeholder="Customer code" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Qnt </label>
                <div class="controls">
                  <input type="text" class="form-control"  name="qut" placeholder="Qnt" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Sales Rep</label>
                <div class="controls">
                  <select class="custom-select form-control"  name="rep" >
                    <option value="">Select Rep</option>
                    @foreach ($user as $usr)
                    <option value="{{$usr->id}}">{{$usr->name}}</option>
                    @endforeach
                </select>  </div>
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
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



      <div class="modal fade" id="modal-edt">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sales Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('update-sales')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <div class="controls">
                  <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
                  <input type="hidden" id="ed_id" name="id">  </div>
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1">Company</label>
                <div class="controls">
                  <select class="custom-select form-control" id="company" name="company"  >
                    <option value="">Select Company</option>
                    @foreach ($company as $com)
                    <option value="{{$com->id}}">{{$com->company_name}}</option>
                    @endforeach
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Unit</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="unit" name="unit">
                    <option value="">Select Unit</option>
                    @foreach ($unit as $unt)
                    <option value="{{$unt->id}}">{{$unt->unit_name}}</option>
                    @endforeach
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Product</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="product" name="product" >
                    <option value="">Select Product</option>
                    @foreach ($product as $prd)
                    <option value="{{$prd->id}}">{{$prd->product_name}}</option>
                    @endforeach
                 
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>  
              
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <div class="controls">
                 <!-- <input type="text" class="form-control" name="type" placeholder="Type" required>-->
                  <select class="custom-select form-control"   id="type"  name="type" required>
                    <option value="">Select Type</option>
                    @foreach ($type as $typ)
                    <option value="{{$typ->id}}">{{$typ->type_name}}</option>
                    @endforeach
                 
                
                  </select>
                </div>
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Color</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="color" name="color" >
                    <option value="">Select Color</option>
                    @foreach ($colors as $col)
                    <option value="{{$col->id}}">{{$col->color_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>

               
              
              <div class="form-group">
                <label for="exampleInputEmail1">Brand</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="brand"  name="brand" >
                    <option value="">Select Form</option>
                    @foreach ($brand as $bnd)
                    <option value="{{$bnd->id}}">{{$bnd->brand_name}}</option>
                    @endforeach
                </select>
                </div>
              </div> <div class="form-group">
                <label for="exampleInputEmail1">Form</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="form" name="form" >
                    <option value="">Select Form</option>
                    @foreach ($form as $fom)
                    <option value="{{$fom->id}}">{{$fom->form_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>

                 
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer</label>
                <div class="controls">
                  <select class="form-control select2"  id="customer" name="customer" >
                    <option value="">Select Customer</option>
                    @foreach ($customer as $cus)
                    <option value="{{$cus->id}}">{{$cus->customer_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>

                               
              
            
              

              <div class="form-group">
                <label for="exampleInputEmail1">Customer code</label>
                <div class="controls">
                  <input type="text" class="form-control" readonly name="ccode" placeholder="Customer code" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Qnt </label>
                <div class="controls">
                  <input type="text" class="form-control"  id="qut" name="qut" placeholder="Qnt" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Sales Rep</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="rep"  name="rep" >
                    <option value="">Select Rep</option>
                    @foreach ($user as $usr)
                    <option value="{{$usr->id}}">{{$usr->name}}</option>
                    @endforeach
                </select>  </div>
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
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </section>

@endsection