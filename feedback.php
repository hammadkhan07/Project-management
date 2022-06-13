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



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Feedback Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe style="border: 2px solid #fff;" height="520" width="460" src="feedbackform.php"></iframe>
      </div>
    </div>
  </div>
</div>


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Feedback</li>
            </ol>
          </div>
        </div>


        <?php
          if (isset($_SESSION['success']) && $_SESSION['success'] !='') 
          {
             echo '<div class="alert alert-success text-center"> '.$_SESSION['success'].' </div>';
             unset($_SESSION['success']);
          }
          if (isset($_SESSION['status']) && $_SESSION['status'] !='') 
          {
             echo '<div class="alert alert-danger text-center"> '.$_SESSION['status'].' </div>';
             unset($_SESSION['status']);
          }
          ?>



   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-secondary">
                <h3 class="card-title">My Feedbacks</h3>
                              <!-- Button trigger modal -->
                 <button style="float: right;" type="button" class="btn btn-md btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Give Feedback</button>
              </div>
                  <div class="card-body">

                                <?php
               
                                 $query = "SELECT * FROM testimonial WHERE user_id = $user_id";
                                 $query_run = mysqli_query($connection, $query);
                                

                                 ?>

              <table id="example4" class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>Project Name</th>
      <th>Company</th>
      <th>Comments</th>
      <th>Ratings</th>
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
      <td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['company']; ?></td>
      <td><?php echo $row['views']; ?></td>
      <td><?php echo $row['rate']; ?></td>
    </tr>
  </tbody>

                        <?php
                            } 
                        }
                        else {
                            echo "";
                        }
                        ?>
  <tfoot>
    <tr>
      <th>Project Name</th>
      <th>Company</th>
      <th>Comments</th>
      <th>Ratings</th>
    </tr>
  </tfoot>
</table>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php
include "includes/footer.php";
include "adminpanel/includes/scripts.php";
?>


<script>
    $(document).ready(function () {
    $('#example4').DataTable();
});s
</script>