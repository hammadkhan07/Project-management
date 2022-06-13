
<?php
include './security.php';
require './database/dbconfig.php';
$email = $_SESSION['Username'];
$sql = "SELECT * FROM admins WHERE Email = '$email'";
    $run_Sql = mysqli_query($connection, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $emaill = $fetch_info['Email'];
        }
?>
<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">LOG OUT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h5> Are you sure you want to logout</h5>
       <h5> If you wish to continue then proceed.</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Dismiss</button>
        <form method="POST" action="adminlogout.php">
        <button type="submit" name="Logout" class="btn btn-primary">Proceed</button>
        </form>
      </div>
    </div>
  </div>
</div>





</div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-danger">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a style="color: #c20d2a;" class="nav-link">ADMINPANEL</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->


      <!-- Notifications Dropdown Menu -->
<button data-toggle="modal" data-target="#logoutModal" class="btn btn-sm btn-danger">LOGOUT</button>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside style="background: #010d23;" class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    <img style="margin-left: 24px;" src="../logos/logo.png" class="brand-image elevation-3" style="opacity: 12">
      <span class="brand-text font-weight-light text-dark">.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a style="margin-left: 20px;" class="d-block"><?php echo $fetch_info['Username']; ?>&nbsp;|&nbsp;<?php echo $fetch_info['Usertype']; ?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="./index.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
    
          <?php
              $query = "SELECT Usertype from admins WHERE Email = '$emaill' ";
              $query_run = mysqli_query($connection, $query);
              $row = mysqli_fetch_array($query_run);
              $Usertype = $row['Usertype'];        

            ?>
            <?php if($Usertype == 'Moderator'): ?>
          <li class="nav-item">
            <a href="./myprojects.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                My Projects
              </p>
            </a>
          </li>
          <?php endif; ?>
          <?php
              $query = "SELECT Usertype from admins WHERE Email = '$emaill' ";
              $query_run = mysqli_query($connection, $query);
              $row = mysqli_fetch_array($query_run);
              $Usertype = $row['Usertype'];        

            ?>
            <?php if($Usertype == 'Superadmin'): ?>
          <li class="nav-item">
            <a href="./user_projects.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               User Projects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./engineers.php" class="nav-link">
              <i class="nav-icon fa fa-user-cog"></i>
              <p>
               Engineers
              </p>
            </a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
            <a href="./user_feedbacks.php" class="nav-link">
              <i class="nav-icon fa fa-star"></i>
              <p>
               Feedbacks
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./usertable.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Usertable
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" data-toggle="modal" data-target="#logoutModal" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
