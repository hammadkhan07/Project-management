<?php
include 'database/dbconfig.php';
include 'security.php';

$email = $_SESSION['Names'];
$sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($connection, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $user_id = $fetch_info['id'];
        }
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<form method="POST" action="uploadfeedback.php">
  <div class="form-group">
    <label for="pname"><b> Project Name: </b></label>
    <input type="text" class="form-control" name="pname" id="pname" aria-describedby="emailHelp" placeholder="Enter Project Name">
  </div>
  <div class="form-group">
    <label for="pname"><b>Company Name:</b></label>
    <input type="text" class="form-control" name="company" id="company" aria-describedby="emailHelp" placeholder="Enter Company Name">
  </div>
  <div class="form-group">
    <label for="pname"><b>Rating:</b></label>
    <select type="text" class="form-control" name="rate">
        <option value="Worst">Worst</option>
        <option value="Bad">Bad</option>
        <option value="Average">Average</option>
        <option value="Fair">Fair</option>
        <option value="Good">Good</option>
        <option value="Excellent">Excellent</option>
    </select>
  </div>
  <input type="hidden" name="name" value="<?php echo $fetch_info['Names']; ?>">
  <input type="hidden" name="user_id" value="<?php echo $fetch_info['id']; ?>">

  <div class="form-group">
    <label for="pname"><b>Comments:</b></label>
    <textarea rows="4" cols=""60 class="form-control" name="views" id="views" placeholder="Comments"></textarea>
  </div>
  <button style=" margin-top: 50px;" type="submit" name="submitResponse" class="btn btn-primary btn-block">Submit My Response</button>
</form>