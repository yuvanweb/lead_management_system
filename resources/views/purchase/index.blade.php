@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Purchase Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Purchase Details </li>
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
              <h3 class="card-title">Purchase List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Create Purchase</button>
              <a class="btn btn-success fl_right  px-1" href="/purchase-excel">Upload Excel</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  	

                <tr>
                  <th>#</th>
                  <th>Company</th>
                  <th>Plant</th>
                  <th>Date</th>
                  <th>Product </th>
                  <th>Type </th>
                  <th>Brand </th>
                 
                  <th>Qty</th> 
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>
              @foreach ($purchases as $prod)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{$prod->company_name}}</td>
                <td>{{$prod->plant_name}}</td>
                <td>{{$prod->purchase_date}}</td>
                <td>{{$prod->product_name}}</td>
                <td>{{$prod->type_name}}</td>
                <td>{{$prod->brand_name}}</td>
                <td>{{$prod->qnt}}</td>
                 
                
               
                 <td> 
                  
                  <button type="button" class="btn btn-primary btn-xs edit_purchase"  data-toggle="modal" data-target="#modal-edt" value="{{$prod->id}}">Edit </button> 
                  <a type="button" class="btn btn-danger btn-xs delete_purchase" href="/delete-purchase/{{$prod->id}}">Delete </a>
                
                  
                  </td>
               </tr> 
              @endforeach
               
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Company</th>
                  <th>Plant</th>
                  <th>Date</th>
                  <th>Product </th>
                  <th>Type </th>
                  <th>Brand </th>
                 
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
        <div class="row">
        </div>
      </div><!-- /.container-fluid -->




      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Purchase Creation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('add-purchase')}}">
                @csrf
            <fieldset>
             
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
                <label for="exampleInputEmail1">Plant</label>
                <div class="controls">
                  <select class="custom-select form-control" name="plant">
                    <option>Select Plant</option>
                    @foreach ($plant as $pnt)
                    <option value="{{$pnt->id}}">{{$pnt->plant_name}}</option>
                    @endforeach
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <div class="controls">
                  <input type="date" class="form-control" id="created_by" name="created_date" placeholder="Date" required>
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
                  <!--<input type="text" class="form-control" name="type" placeholder="Type" required>-->
                  <select class="custom-select form-control"   name="type" required>
                    <option value="">Select Type</option>
                    @foreach ($type as $typ)
                    <option value="{{$typ->id}}">{{$typ->type_name}}</option>
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
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Qnt </label>
                <div class="controls">
                  <input type="text" class="form-control"  name="qut" placeholder="Qnt" required>
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
         </div>
      </div>


      <div class="modal fade" id="modal-edt">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Purchase Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('update-purchase')}}">
                @csrf
            <fieldset>
             
              <div class="form-group">
                <label for="exampleInputEmail1">Company</label>
                <div class="controls">
                  <input type="hidden" id="ed_id" name="id">  
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
                <label for="exampleInputEmail1">Plant</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="plant"  name="plant">
                    <option>Select Plant</option>
                    @foreach ($plant as $pnt)
                    <option value="{{$pnt->id}}">{{$pnt->plant_name}}</option>
                    @endforeach
                
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <div class="controls">
                  <input type="date" class="form-control" id="purchase_date"  name="created_date" placeholder="Date" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 

              <div class="form-group">
                <label for="exampleInputEmail1">Unit</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="unit"   name="unit">
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
                  <select class="custom-select form-control"  id="product"   name="product" >
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
                 <!-- <input type="text" class="form-control"  id="type"   name="type" placeholder="Type" required>-->
                  <select class="custom-select form-control"  id="type"   name="type" required>
                    <option value="">Select Type</option>
                    @foreach ($type as $typ)
                    <option value="{{$typ->id}}">{{$typ->type_name}}</option>
                    @endforeach
                 
                
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1">Brand</label>
                <div class="controls">
                  <select class="custom-select form-control"  id="brand"   name="brand" >
                    <option value="">Select Form</option>
                    @foreach ($brand as $bnd)
                    <option value="{{$bnd->id}}">{{$bnd->brand_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Qnt </label>
                <div class="controls">
                  <input type="text" class="form-control"  id="qnt"   name="qut" placeholder="Qnt" required>
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
              <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
         </div>
      </div>

</section>

@endsection