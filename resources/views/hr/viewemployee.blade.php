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
          <li class="breadcrumb-item active">View Employee </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <h1>RA</h1>
                </div>

                <h3 class="profile-username text-center">Ramesh</h3>

                <p class="text-muted text-center">Sales Rep</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Total Leave</b> <a class="float-right">5</a>
                  </li>
                  <li class="list-group-item">
                    <b>Leave Taken</b> <a class="float-right">3</a>
                  </li>
                  <li class="list-group-item">
                    <b>Balance Leave</b> <a class="float-right">2</a>
                  </li>
                </ul>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!--<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pay Scale</h3>
              </div>
            
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
             
            </div>-->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Personal Details </a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Leave Details </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" value="Ramesh" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" readonly value="Ramesh@gmail.com" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Mobile</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" value="9898767676"  placeholder="Mobile">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Role</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Role" value="Sales Rep" >
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Date of Join</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputSkills" placeholder="Date of Join" value="2024-10-10">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Status</label>
                          <div class="col-sm-10">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" class="custom-control-input" checked id="customSwitch3">
                              <label class="custom-control-label" for="customSwitch3">

                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="">
                      <!-- timeline time label -->
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Address"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Aadhar Number</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Aadhar Number">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Pan Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Pan Number">
                          </div>
                        </div>
                      
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <hr>
                    <div class="container text-center">
                      <label for="inputExperience" class=" col-form-label">Document</label>
                   
                        <div class="row">
                          <div class="col"><label for="inputExperience" class=" col-form-label">Document Name</label></div>
                          <div class="col"><input type="text" name="document_name" class="form-control" ></div>
                          <div class="col"><input type="file" name="inputField" class="form-control"></div>
                          <div class="col"><button class="btn btn-info">upload</button></div>
                          
                          
                      </div>
                      <label for="inputSkills" class="text-center col-form-label">Uploaded Document</label>
                      <div class="row">
                        <div class="col"><p>Aadhar</p></div>
                     
                        <div class="col"><downloa class="btn btn-info">Download</downloa></div>
                        <div class="col"><downloa class="btn btn-danger">Delete</downloa></div>
                        
                        
                    </div>
                     
                    </div>
                   
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Total Leave</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Leave Taken</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Balance Leave</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Leave Taken Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>

                    <hr>
                    <div class="container text-center">
                      <label for="inputExperience" class=" col-form-label">Leave</label>
                   
                        <div class="row">
                          <div class="col"><label for="inputExperience" class=" col-form-label">Leave Reson</label></div>
                          <div class="col"><input type="text" name="document_name" class="form-control" ></div>
                          <div class="col"><label for="inputExperience" class=" col-form-label">Date</label></div>
                          <div class="col"><input type="date" name="document_name" class="form-control" ></div>
                      
                          <div class="col"><button class="btn btn-info">add leave</button></div>
                          
                          
                      </div>
                      <label for="inputSkills" class="text-center col-form-label">Leave Taken</label>
                      <div class="row">
                        <div class="col"><p>Leave Fever</p></div>
                        <div class="col"><p>11-sep-2024</p></div>
                      
                        <div class="col"><downloa class="btn btn-danger">Delete Leave</downloa></div>
                       
                      
                        
                        
                    </div>
                     
                    </div>




                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection