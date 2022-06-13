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
            <h1>Engineers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Engineers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->




      <!-- Admin Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create New Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="quickForm" method="POST" action="code.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Username">Username:</label>
                    <input type="text" name="Username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="email" name="Email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="Password">Password:</label>
                    <input type="text" name="Password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="package">Usertype:</label>
                    <select name="Usertype" class="form-control" placeholder="Please select one">
                        <option value="User">User</option>
                        <option value="Moderator">Moderator</option>
                        <option value="Superadmin">Superadmin</option>
                   </select>
                  </div>
                </div>
                <!-- /.card-body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
        <button type="submit" name="create_admin" class="btn btn-primary">CREATE</button>

        </form>
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

              <!-- Button trigger modal -->
                <button style="float: right;" type="button" class="btn btn-md btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                Add Admin
                </button>

                <h3 class="card-title">Admins</h3>
              </div>

              <?php
                      $query = "SELECT * FROM admins";
                      $query_run = mysqli_query($connection, $query);
                    ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Usertype</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                  <tr>
                    <td><?php  echo $row['id']; ?></td>
                    <td><?php  echo $row['Username']; ?></td>
                    <td><?php  echo $row['Email']; ?></td>
                    <td><?php  echo $row['Password']; ?></td>
                    <td><?php  echo $row['Usertype']; ?></td>
                    <td>
                  <form action="editadmin.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                </form>
                </td>
                <td>
                  <form action="code.php" method="POST">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </button>
                </form>
                </td>
                  </tr>
                  </tbody>

                  <?php
                            } 
                        }
                        else {
                           // echo "No Record Found";
                        }
                        ?>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Usertype</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
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
include "includes/scripts.php";
?>


<script>
    $(document).ready(function () {
    $('#example').DataTable();
});s
</script>