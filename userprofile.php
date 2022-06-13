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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->










   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-danger">
                <h3 class="card-title">My Profile</h3>

               

              </div>
  

            <table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Details</th>
      <th scope="col">Info</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <b>Name</b></td>
      <td><?php echo $fetch_info['Names']; ?> </td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td><b>Email</b></td>
      <td><?php echo $fetch_info['email']; ?></td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td><b>Phone</b></td>
      <td><?php echo $fetch_info['Phone']; ?></td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td><b>Password</b></td>
      <td><?php echo $fetch_info['Password']; ?></td>
    </tr>
  </tbody>
</table>



      </div><!-- /.container-fluid -->
    <!-- /.content -->
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
include "includes/scripts.php";
?>