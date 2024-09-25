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
          <li class="breadcrumb-item active">Holidays </li>
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
            

            <h3 class="profile-username text-center">Holiday</h3>

            <p class="text-muted text-center">calander</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>New Year</b> <a class="float-right">1-1-2024</a>
              </li>
              <li class="list-group-item">
                <b>Pongal</b> <a class="float-right">14-1-2024</a>
              </li>  
               <li class="list-group-item">
                <b>Diwaly</b> <a class="float-right">14-1-2024</a>
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
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Holiday Calander</a></li>
              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Calander </a></li>
             
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputName"  placeholder="Date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Holiday Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" readonly  placeholder="New year">
                      </div>
                    </div>
                  


                
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Add</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->
                <hr>
                <div class="container text-center">
                 
                  <label for="inputSkills" class="text-center col-form-label">Holiday List</label>
                  <div class="row">
                    <div class="col"><p>New year</p></div>
                 
                    <div class="col"><p>1-1-2024</p></div>
                    <div class="col"><downloa class="btn btn-danger">Delete</downloa></div>
                    
                    
                </div>
                 
                </div>
              
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <div class="card card-primary">
                  <div class="card-body p-0">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                  </div>
                  <!-- /.card-body -->
                </div>
              
               
              </div>
              <!-- /.tab-pane -->

            
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