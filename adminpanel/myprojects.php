<?php
include 'security.php';
include "database/dbconfig.php";
include "includes/header.php";
include "includes/navbar.php";


$Email = $_SESSION['Username'];
$sql = "SELECT * FROM admins WHERE Email = '$Email'";
    $run_Sql = mysqli_query($connection, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $engineer_id = $fetch_info['id'];
        }


// For deleting projects
if (isset($_GET['projectID'])) {
  $id = $_GET['projectID'];
  mysqli_query($connection, "DELETE FROM projects WHERE id=$id");
  echo ""; 
  
}
?>




<!-- Modal -->
<div class="modal fade" id="uploadModalCenter" tabindex="-1" role="dialog" aria-labelledby="uploadModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadModalLongTitle">Upload Review Document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group"> 
          <?php 
                $query = "SELECT * FROM admins WHERE Usertype = 'Moderator'";
                $run = mysqli_query($connection, $query);
                $count = mysqli_num_rows($run);

                if($count > 0):
                  while ($fetch = mysqli_fetch_array($run)) :
              ?>
             
               
                <option value="<?= $fetch['id']; ?>"><?= $fetch['Email']; ?></option>
              
              <?php 
                  endwhile; 
                  endif; 
              ?>
          </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


      
      <?php if(isset($_GET['attach'])) { ?>
   <div class="alert alert-success text-center" role="alert">
   <?=$_GET['attach']?>    
   </div>   

   <?php } ?>



   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-secondary">
                <h3 class="card-title">Project Workbench</h3>

                <?php
               
                                 $query = "SELECT * FROM projects WHERE engineer_id = $engineer_id";
                                 $query_run = mysqli_query($connection, $query);
                                

                                 ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Project Type</th>
                    <th>Testing Type</th>
                    <th>Status</th>
                    <th>Assigned Engineer</th>
                    <th>Received (Client)</th>
                    <th>Sent (Engineer)</th>
                    <th>Actions</th>
                    <th>Details</th>
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
                    <td><?php  echo $row['Pname']; ?></td>
                    <td><?php  echo $row['Ptype']; ?></td>
                    <td><?php  echo $row['testingtype']; ?></td>
                    <td><?php  echo $row['status']; ?></td>
                    <td><?php  echo $row['Engineer']; ?></td>
                    <td><a target="_blank" href="project/<?= $row['name']; ?>">Download</a></td>
                    <td><a target="_blank" href="reviewdoc/<?= $row['reviewfile']; ?>"><?php echo $row['reviewfile']; ?></a></td>
                    <td>
                    <div class="btn-toolbar mb-6" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group mr-2" role="group" aria-label="First group">
                      <?php if($row['status'] == 'Accepted' || $row['status'] == 'In-Progress' || $row['status'] == 'Completed'): ?>
                        <form method="POST" action="inprogress.php">
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button title="IN-PROGRESS" name="project_progress" type="submit" class="btn btn-sm btn-warning"><i class="fa fa-spinner"></i></button>
                      </form>
                        <?php endif; ?>




                        <?php if($row['status'] == 'Accepted' || $row['status'] == 'In-Progress' || $row['status'] == 'Completed'): ?>
                        <form method="POST" action="projectcomplete.php">
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button title="COMPLETE" name="project_complete" type="submit" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i></button>
                        </form>
                        <?php endif; ?>


                        <a href="myprojects.php?projectID=<?php echo $row['id']; ?>">  <button title="DELETE" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button></a>
                        
                      </div>
                    </td>
                    <td>
                    <form action="project-details.php" method="post">
                    <input type="hidden" name="editID" value="<?php echo $row['id']; ?>">
                    <button title="PROJECT DETAILS"  type="submit" name="edit_project" class="btn btn-dark btn-sm"><i class="fa fa-file-powerpoint-o"></i></button>
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
                    <th>Project Name</th>
                    <th>Project Type</th>
                    <th>Testing Type</th>
                    <th>Status</th>
                    <th>Assigned Engineer</th>
                    <th>Received (Client)</th>
                    <th>Sent (Engineer)</th>
                    <th>Actions</th>
                    <th>Details</th>
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
});
$('#example').DataTable( {
    responsive: true
} );
</script>

