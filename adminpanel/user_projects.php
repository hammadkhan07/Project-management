<?php
include 'security.php';
include "database/dbconfig.php";
include "includes/header.php";
include "includes/navbar.php";


// For deleting projects
if (isset($_GET['projectID'])) {
  $id = $_GET['projectID'];
  mysqli_query($connection, "DELETE FROM projects WHERE id=$id");
  echo ""; 
  
}
?>



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
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
                <h3 class="card-title">Submitted Projects</h3>

                <?php
                                
                                 $query = "SELECT * FROM projects";
                                 $query_run = mysqli_query($connection, $query);
                                  ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="project" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Project ID</th>
                    <th>Project Name</th>
                    <th>Project Type</th>
                    <th>Date</th>
                    <th>Testing Type</th>
                    <th>Status</th>
                    <th>Assigned Engineer</th>
                    <th>File</th>
                    <th>Actions</th>
                    <th>Assign Engineers</th>
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
                    <td><?php  echo $row['Pname']; ?></td>
                    <td><?php  echo $row['Ptype']; ?></td>
                    <td><?php  echo $row['datetime']; ?></td>
                    <td><?php  echo $row['testingtype']; ?></td>
                    <td><?php  echo $row['status']; ?></td>
                    <td><?php  echo $row['Engineer']; ?></td>
                    <td><a target="_blank" href="project/<?php echo $row['name']; ?>"><i class="fa fa-file-alt"></i>&nbsp;Project File</a></td>
                    <td>
                    <div class="btn-toolbar mb-6" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group mr-2" role="group" aria-label="First group">
                      <?php if($row['status'] == 'Submitted' || $row['status'] == 'Accepted' || $row['status'] == 'Rejected'): ?>
                        <form method="POST" action="projectaccept.php">
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button title="ACCEPT" name="project_accept" type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i></button>
                      </form>
                        <?php endif; ?>




                        <?php if($row['status'] == 'Submitted' || $row['status'] == 'Rejected' || $row['status'] == 'Accepted'): ?>
                        <form method="POST" action="projectreject.php">
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button title="REJECT" name="project_reject" type="submit" class="btn btn-sm btn-warning"><i class="fa fa-close"></i></button>
                        </form>
                        <?php endif; ?>




                        <a href="user_projects.php?projectID=<?php echo $row['id']; ?>">  <button title="DELETE" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button></a>
                      </div>
                    </td>


                    <td>
                    <form action="assign-engineer.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button title="ASSIGN"  type="submit" name="edit_btn" class="btn btn-info btn-sm"><i class="fa fa-user-plus"></i></button>
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
                    <th>Project ID</th>
                    <th>Project Name</th>
                    <th>Project Type</th>
                    <th>Date</th>
                    <th>Testing Type</th>
                    <th>Status</th>
                    <th>Assigned Engineer</th>
                    <th>File</th>
                    <th>Actions</th>
                    <th>Assign Engineers</th>
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
    $('#project').DataTable();
});
$('#project').DataTable( {
    responsive: true
} );




    //Retrieving data
    $("#projectadmin").on('change', function() {
      var adminProjectId = $(this).val();
      // console.log(userLetterId);
      $.ajax({
              url: 'userprojectajax.php',
              method: 'POST',
              data: {adminProjectId: adminProjectId},
              success: function(data) {
                var response = JSON.parse(data);
                console.log(response[0].id);
                var userid = $("#userid").val(response[0].id);
                var username = $("#username").val(response[0].Username);
                var useremail = $("#useremail").val(response[0].Email);
                
              }
    })
} );
</script>