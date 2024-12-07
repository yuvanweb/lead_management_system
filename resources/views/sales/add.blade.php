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
          <li class="breadcrumb-item active">Add Sales Details </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
    
      <div class="" id="">
        <div class="">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sales Creation</h4>
              
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('add-sales')}}">
                @csrf
            <fieldset>
             <div class="row">
             <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <div class="controls">
                  <input type="date" class="form-control" name="date" placeholder="Date" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              </div> 
              <div class="col-md-6">
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
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
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
              </div>
              <div class="col-md-6">  
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
              </div>  
              </div>  
              
              
              <div class="row">
                <div class="col-md-6"> 
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
              </div>
            
                <div class="col-md-6"> 
              
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
              </div>
              </div>

              <div class="row">
                <div class="col-md-6">  
              
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
              </div> 
              </div> 
            
                <div class="col-md-6"> 
              
              <div class="form-group">
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
              </div>
              </div>

                 
              <div class="row">
                <div class="col-md-6">  
              <div class="form-group">
                <label for="exampleInputEmail1">Customer</label>
                <div class="controls">

{{-- <input type="text" class="form-control cust" style="width: 100%;"  > --}}

                  <select class="form-control sales_cus select2bs4" style="width: 100%;" name="customer" >
                    <option value="">Select Customer</option>
                    @foreach ($customer as $cus)
                    <option value="{{$cus->id}}">{{$cus->customer_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>
              </div>

                               
              
            
         
                <div class="col-md-6"> 

              <div class="form-group">
                <label for="exampleInputEmail1">GST Number</label>
                <div class="controls">
                  <input type="text" class="form-control gst_num"  name="ccode" placeholder="GST Number" readonly >
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              </div>
              </div>

              <div class="row">
                <div class="col-md-6"> 
              <div class="form-group">
                <label for="exampleInputEmail1">Qnt </label>
                <div class="controls">
                  <input type="text" class="form-control"  name="qut" placeholder="Qnt" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              </div>

                <div class="col-md-6"> 
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
              </div>
              </div>


              <div class="row">
                <div class="col-md-6"> 
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Create </button>
                </div>
              </div>
              </div>
              <div class="col-md-6"> 
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



    
    </section>

@endsection