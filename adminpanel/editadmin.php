<?php
include 'security.php';
require 'database/dbconfig.php';
include "includes/header.php";
include "includes/navbar.php";
?>



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit-Engineers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Edit Engineers</li>
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
              <div class="card-header bg-secondary">

                <h3 class="card-title">Edit-Admin</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <?php
                   if (isset($_POST['edit_btn'])) 
                   {
                     $id = $_POST['edit_id'];

                     $query = "SELECT * FROM admins WHERE id='$id'";
                     $query_run = mysqli_query($connection, $query);
                   
                     foreach ($query_run as $row) {
                       
                   ?>

              <form id="quickForm" method="POST" action="code.php">
                <div class="card-body">
                  <div class="form-group">

                  <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">


                    <label for="edit-username">Edit Name:</label>
                    <input type="text" name="edit_Username" class="form-control" value="<?php echo $row['Username'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="edit-username">Edit Email:</label>
                    <input type="text" name="edit_Email" class="form-control" value="<?php echo $row['Email'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="edit-Password">Edit Password:</label>
                    <input type="text" name="edit_Password" class="form-control" value="<?php echo $row['Password'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="package">Edit Usertype:</label>
                    <select name="edit_Usertype" class="form-control" value="<?php echo $row['Usertype'] ?>">
                        <option value="User">User</option>
                        <option value="Moderator">Moderator</option>
                        <option value="Superadmin">Superadmin</option>
                   </select>
                  </div>
                  
                </div>
                <a href="engineers.php" class="btn btn-warning">Cancel</a>
                <button type="submit" name="Update_admin" class="btn btn-success">Update</button>
                <!-- /.card-body -->
              </form>
              <?php
                }
            }
        ?>
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
include "includes/scripts.php";
?>