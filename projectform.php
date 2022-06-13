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

<form method="POST" action="uploadproject.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Project Name">Project Name:</label>
                    <input type="text" name="Pname" class="form-control" placeholder="Enter Project Name" required="">
                  </div>

                  
                  <div class="form-group">
                  <label for="Project Type">Project Type:</label>
                      <select name="Ptype" class="form-control" placeholder="Please select one" required="">
                        <option value="Web Application">Web Application</option>
                        <option value="Mobile Application">Mobile Application</option>
                      </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Type of testing:</label>
                    <select name="testingtype" class="form-control" placeholder="Please select one" required="">
                        <option value="Black box">Black box</option>
                        <option value="White box">White box</option>
                        <option value="Unit testing">Unit testing</option>
                        <option value="Stress testing">Stress testing</option>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="time">Day or hours:</label>
                    <select name="timeframe" class="form-control" placeholder="Please select one" required="">
                        <option value="Week">Week</option>
                        <option value="Month">Month</option>
                        <option value="per hour">per hour</option>
                        <option value="five hours">five hours</option>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="package">Package:</label>
                    <select name="package" class="form-control" placeholder="Please select one" required="">
                        <option value="$100">$100</option>
                        <option value="$300">$300</option>
                        <option value="$200">$200</option>
                        <option value="$500">$500</option>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="Payment">Payment:</label>
                    <input type="text" name="Payment" class="form-control" placeholder="Enter payment method" required="">
                  </div>

                  <input type="hidden" name="user_id" value="<?php echo $fetch_info['id'] ?>">

                  <div class="form-group">
                    <label for="myproject">Project-Document:</label>
                    <input type="file" id="myproject" name="myproject" required="">  
                  </div>

                  <div class="form-group">
                  <button type="submit" name="upload_project_file" class="btn btn-block btn-success">Submit</button>
                </div>
                <!-- /.card-body -->
      </div>
        </form>