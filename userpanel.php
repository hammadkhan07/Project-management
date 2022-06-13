<?php
include 'database/dbconfig.php';
include 'security.php';
include 'includes/header.php';
include 'includes/navbar.php';

$email = $_SESSION['Names'];
$sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($connection, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $user_id = $fetch_info['id'];
        }
?>

    <!-- Breadcrumbs section (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Submit New Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe style="border: 2px solid #fff;" height="683" width="765" src="projectform.php"></iframe>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-secondary">
                <h3 class="card-title">Home</h3>
                <!-- Large modal -->
                 <button style="float: right;" type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Submit Project</button>
              </div>

              <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-primary text-white">Ethical Methods</h5>
                    <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="dist/img/photo2.png" alt="Dist Photo 2">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-primary text-white">Team of Professionals</h5>
                    <p class="card-text text-white pb-2 pt-1">
                      Lorem ipsum dolor sit amet, 
                      consectetur adipisicing elit 
                      sed do eiusmod tempor.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="dist/img/photo3.jpg" alt="Dist Photo 3">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-primary text-white">Success Rate</h5>
                    <p class="card-text text-white pb-2 pt-1">
                      Lorem ipsum dolor 
                      sit amet, consectetur 
                      adipisicing elit sed 
                      do eiusmod tempor. </p>
                  </div>
                </div>
              </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-striped table-hover">
                  <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Info</th>
                    <th>Shortcuts
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Projects</td>
                    <th>
                    <a href="projects.php">Go to</a>
                    </th>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Feedbacks</td>
                    <th>
                    <a href="feedback.php">Go to</a>
                    </th>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>My Profile</td>
                    <th>
                    <a href="userprofile.php">Go to</a>
                    </th>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<?php
include "includes/footer.php";
include "adminpanel/includes/scripts.php";
?>