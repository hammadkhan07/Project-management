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



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
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
                <h3 class="card-title">My Project History</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                                <?php
               
                                 $query = "SELECT * FROM projects WHERE user_id = $user_id";
                                 $query_run = mysqli_query($connection, $query);
                                

                                 ?>

                <table id="example" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Project Type</th>
                    <th>Date</th>
                    <th>Testing Type</th>
                    <th>Status</th>
                    <th>Engineer Doc</th>
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
                    <td><?php echo $row['Pname']; ?></td>
                    <td><?php echo $row['Ptype']; ?></td>
                    <td><?php echo $row['datetime']; ?></td>
                    <td><?php echo $row['testingtype']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a target="_blank" href="reviewdoc/<?= $row['reviewfile']; ?>"><?php echo $row['reviewfile']; ?></a></td>
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
                    <th>Date</th>
                    <th>Testing Type</th>
                    <th>Status</th>
                    <th>Engineer Doc</th>
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