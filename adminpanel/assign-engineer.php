<?php
include 'security.php';
include "database/dbconfig.php";
include "includes/header.php";
include "includes/navbar.php";
?>
<style>
    .project-section {
  margin-bottom: 30px;
}
.project-section h3 {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  margin-top: 0;
}
.project-section.activity h3 {
  margin-bottom: 0;
}
.project-section dl {
  margin-top: 20px;
  margin-bottom: 0;
}
.project-section dl dd {
  margin-bottom: 10px;
}
/* @media screen and (min-width: 768px) {
  .project-section dl.dl-horizontal dt {
    width: 95px;
    margin-bottom: -23px;
  }
  .project-section dl.dl-horizontal dd {
    margin-left: 105px;
    margin-bottom: 0;
  }
} */
.project-section ul.team-list {
  margin-top: 10px;
}
.project-section ul.team-list > li {
  text-align: center;
  margin-bottom: 15px;
  padding: 0 10px;
}
.project-section ul.team-list > li img {
  width: 40px;
  margin-bottom: 8px;
}
.project-section ul.team-list > li p {
  margin-bottom: 0;
  line-height: 1;
}
.project-section ul.team-list > li span {
  font-size: 10px;
}
.project-section ul.team-list > li.team-add > i {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  display: block;
  margin: 0 auto;
  margin-bottom: 17px;
  width: 40px;
  height: 40px;
  font-size: 28px;
  background-color: #ccc;
  color: inherit;
}
.project-section ul.team-list > li.team-add .btn {
  position: relative;
  top: -7px;
}

ul.project-activity-list > li {
  border-top: 1px dashed #CCC;
}
ul.project-activity-list > li:first-child {
  border-top: none;
}
ul.project-activity-list > li .activity-item .avatar, ul.project-activity-list > li .activity-item > i {
  width: 24px;
}
ul.project-activity-list > li .activity-item > i {
  font-size: 24px;
}

.project-progress {
  margin-top: 20px;
}
.project-progress .pie-chart {
  width: 100px;
}
.project-progress .pie-chart .percent {
  line-height: 100px;
}
.project-progress .percent, .project-progress .chart-title {
  color: inherit;
}


/* widgets */
.widget {
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  border-width: 1px;
  border-style: solid;
  margin-bottom: 20px;
  background-color: #fff;
  border-color: #d0d0d0;
}
.widget .widget-header h3, .widget.widget-no-header h3 {
  margin-top: 0;
  font-size: 14px;
  color: #6a6a6a;
}
.widget.widget-transparent {
  border: none;
  background: transparent;
}
.widget .widget-header {
  padding: 0 10px;
  border-bottom: 1px solid #fff;
  background-color: #e9e9e9;
}
.widget .widget-header h3 {
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  *zoom: 1;
  *display: inline;
  margin-bottom: 0;
  line-height: 40px;
  float: left;
}
@media screen and (max-width: 480px) {
  .widget .widget-header h3 {
    display: block;
    float: none;
  }
}
.widget .widget-header h3 i {
  width: 18px;
  padding: 10px 0;
  font-size: 16px;
  color: #6A6A6A;
}
.widget .widget-header .btn-group > a,
.widget .widget-header .btn-group .dropdown-toggle .icon {
  color: #838383;
}
.widget .widget-header .btn-group > a:hover, .widget .widget-header .btn-group > a:focus,
.widget .widget-header .btn-group .dropdown-toggle .icon:hover,
.widget .widget-header .btn-group .dropdown-toggle .icon:focus {
  color: #505050;
}
.widget .widget-header .widget-header-toolbar {
  float: right;
  width: auto;
  margin-left: 15px;
}
@media screen and (max-width: 480px) {
  .widget .widget-header .widget-header-toolbar {
    display: block;
    position: initial;
  }
}
.widget .widget-header .widget-header-toolbar.btn-group {
  top: 5px;
}
@media screen and (max-width: 480px) {
  .widget .widget-header .widget-header-toolbar.btn-group > .btn {
    top: -5px;
  }
}
.widget .widget-header .widget-header-toolbar .label {
  position: relative;
  top: 11px;
  padding: 5px;
  font-size: 85%;
}
@media screen and (max-width: 480px) {
  .widget .widget-header .widget-header-toolbar .label {
    top: 0;
  }
}
.widget .widget-header .widget-header-toolbar .label i {
  font-size: 14px;
}
.widget .widget-header .widget-header-toolbar .btn-xs {
  top: 5px;
}
.widget .widget-header .widget-header-toolbar .btn-link {
  padding: 0 0 0 15px;
}
.widget .widget-header .widget-header-toolbar .btn-link i {
  font-size: 28px;
  line-height: 1;
}
.widget .widget-header .widget-header-toolbar .btn-link:first-child {
  padding-left: 0;
}
.widget .widget-header .widget-header-toolbar .progress {
  width: 150px;
  position: relative;
  top: 19px;
}
@media screen and (max-width: 480px) {
  .widget .widget-header .widget-header-toolbar .progress {
    top: 0;
  }
}
.widget .widget-header .widget-header-toolbar .progress .progress-bar {
  font-size: 10px;
  line-height: 1.5;
}
.widget .widget-header .nav-tabs {
  border-bottom: none;
}
.widget .widget-header .nav-tabs > li > a {
  height: 41px;
}
.widget .widget-header .nav-tabs > li > a, .widget .widget-header .nav-tabs > li > a:hover, .widget .widget-header .nav-tabs > li > a:focus {
  border-top: none;
  border-bottom: none;
}
.widget .widget-header .nav-justified > li > a {
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
}
.widget .widget-header .nav-justified > li:first-child > a {
  -moz-border-radius-topleft: 2px;
  -webkit-border-top-left-radius: 2px;
  border-top-left-radius: 2px;
}
.widget .widget-header .nav-justified > li:last-child > a {
  -moz-border-radius-topright: 2px;
  -webkit-border-top-right-radius: 2px;
  border-top-right-radius: 2px;
  margin-right: -1px;
}
.widget .widget-content {
  padding: 20px;
}
.widget .widget-footer {
  padding: 7px 10px;
  background-color: #e9e9e9;
}
.widget .widget-footer .progress {
  margin-bottom: 0;
}

.widget-header-toolbar .pagination-sm {
  margin-bottom: 0;
  margin-top: 5px;
}
.widget-header-toolbar .onoffswitch > label:first-child {
  margin-bottom: 0;
  top: 3px;
}
.widget-header-toolbar .fancy-checkbox {
  margin-bottom: 0;
  position: relative;
  top: 4px;
}
.widget-header-toolbar .fancy-checkbox input[type="checkbox"] + span {
  margin-right: 0;
}
.widget-header-toolbar .badge {
  margin-top: 10px;
}
@media screen and (max-width: 480px) {
  .widget-header-toolbar .badge {
    margin-top: 0;
  }
}
    </style>

<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign Engineer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Assign Engineer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->






   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">

      <?php
                   if (isset($_POST['edit_btn'])) 
                   {
                     $id = $_POST['edit_id'];

                     $query = "SELECT * FROM projects WHERE id='$id'";
                     $query_run = mysqli_query($connection, $query);
                   
                     foreach ($query_run as $row) {
                       
                   ?>

<div class="container primary-content">
	<!-- PRIMARY CONTENT HEADING -->
	<div class="primary-content-heading clearfix">
		<!-- <h2>PROJECT TITLE</h2> -->
        <hr style="border:1px solid #fff">
		<div class="sticky-content pull-right">
			<!-- <div class="btn-group btn-dropdown">
				<button type="button" class="btn btn-default btn-sm btn-favorites" data-toggle="dropdown"><i class="fa fa-android-star"></i> Favorites</button>
				<ul class="dropdown-menu dropdown-menu-right list-inline">
					<li><a href="#"><i class="fa fa-pie-graph"></i> <span>Statistics</span></a></li>
					<li><a href="#"><i class="fa fa-email"></i> <span>Inbox</span></a></li>
					<li><a href="#"><i class="fa fa-chatboxes"></i> <span>Chat</span></a></li>
					<li><a href="#"><i class="fa fa-help-circled"></i> <span>Help</span></a></li>
					<li><a href="#"><i class="fa fa-gear-a"></i> <span>Settings</span></a></li>
					<li><a href="#"><i class="fa fa-help-buoy"></i> <span>Support</span></a></li>
				</ul>
			</div> -->
			<button type="button" class="btn btn-default btn-sm btn-quick-task" data-toggle="modal" data-target="#quick-task-modal"><i class="fa fa-user-plus"></i> Add Engineer</button>
		    <br>
            <br>
		</div>
		<!-- quick task modal -->
		<div class="modal fade" id="quick-task-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">ADD ENGINEER</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="POST" action="assign.php">
							<div class="form-group">
								<label for="task-title" class="control-label sr-only">Title</label>
								<div class="col-sm-12">
                                <select class="form-control" id='adminProject'>
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
                                </select>
								</div>
							</div>
							<div class="col-sm-12">
								<input type="hidden" class="form-control" name="EngineerName" id="adminName" placeholder="EngineerName" value=""></input>
                                <input type="hidden" class="form-control" name="EngineerID" id="admin_ID" placeholder="EngineerID" value=""></input>
                                <input type="hidden" class="form-control" name="id" placeholder="EngineerID" value="<?php  echo $row['id']; ?>"></input>
                                <input type="hidden" class="form-control" name="user_id" placeholder="EngineerID" value="<?php  echo $row['user_id']; ?>"></input>
							</div>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" name="Assign" class="btn btn-primary">Assign</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end quick task modal -->
	</div>
	<!-- END PRIMARY CONTENT HEADING -->
	<div class="row">
		<div class="col-md-8">
			<div class="project-section general-info">
				<h3>General Info</h3>
				<!-- <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-compose"></i> Edit Project</button> -->
				<!-- <p><b>Project Name:</b> </p> -->
				<div class="row">
					<div class="col-sm-9">
						<dl class="dl-horizontal">
                            <dt>Project Name:</dt>
							<dd><?php  echo $row['Pname']; ?></dd>
							<dt>Date:</dt>
							<dd><?php  echo $row['datetime']; ?></dd>
							<dt>Timeframe:</dt>
							<dd><?php  echo $row['timeframe']; ?></dd>
							<dt>Project Type:</dt>
							<dd><?php  echo $row['Ptype']; ?></dd>
							<dt>Testing Type:</dt>
							<dd><?php  echo $row['testingtype']; ?></dd>
							<dt>Status:</dt>
							<dd><?php  echo $row['status']; ?></dd>
							<dt>Engineer:</dt>
							<dd><?php  echo $row['Engineer']; ?></dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="project-section activity">
			</div>
		</div>
		<div class="col-md-4">
            <!-- RECENT FILES -->
			<div class="widget">
				<div class="widget-header clearfix">
					<h3><i class="fa fa-document"></i> <span>RECENT FILES</span></h3>
					<div class="btn-group widget-header-toolbar">
						<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="fa fa-ios-arrow-up"></i></a>
						<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="fa fa-ios-close-empty"></i></a>
					</div>
				</div>
				<div class="widget-content">
					<ul class="fa-ul recent-file-list">
						<li><i class="fa-li fa fa-file-pdf-o"></i><a target="_blank" href="project/<?php echo $row['name']; ?>">[DRAFT] Project Requirements</a></li>
						<li><i class="fa-li fa fa-file-word-o"></i><a href="#">Engineer Uploaded File</a></li>
					</ul>
				</div>
			</div>
			<!-- END RECENT FILES -->
			<!-- MY TODO LIST -->
			<div class="widget">
				<div class="widget-header clearfix">
					<h3><i class="fa fa-calendar"></i> <span>MY TODO LIST</span></h3>
					<div class="btn-group widget-header-toolbar">
						<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="fa fa-ios-arrow-up"></i></a>
						<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="fa fa-ios-close-empty"></i></a>
					</div>
				</div>
				<div class="widget-content">
					<ul class="list-unstyled simple-todo-list">
						<li>
							<label class="fancy-checkbox">
								<input type="checkbox" checked="checked">
								<span class="todo-text">Upload new revision</span>
							</label>
						</li>
						<li>
							<label class="fancy-checkbox">
								<input type="checkbox">
								<span class="todo-text">Responsive test</span>
							</label>
						</li>
						<li>
							<label class="fancy-checkbox">
								<input type="checkbox" checked="checked">
								<span class="todo-text">Cross-browser check</span>
							</label>
						</li>
						<li>
							<label class="fancy-checkbox">
								<input type="checkbox">
								<span class="todo-text">Social media research</span>
							</label>
						</li>
						<li>
							<label class="fancy-checkbox">
								<input type="checkbox">
								<span class="todo-text">Conduct A/B test</span>
							</label>
						</li>
					</ul>
				</div>
			</div>
			<!-- END MY TODO LIST -->
		</div>
	</div>
</div>

      <?php
                }
            }
        ?>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php
include "includes/footer.php";
include "includes/scripts.php";
?>


<!-- <script>
    $(document).ready(function () {
    $('#project').DataTable();
});
$('#project').DataTable( {
    responsive: true
} );
</script> -->


<script>
  $(document).ready(function() {
    $('#project').DataTable();
} );


$('#project').DataTable( {
    responsive: true
} );

    //Retrieving data
    $("#adminProject").on('change', function() {
      var adminProjectId = $(this).val();
      // console.log(userLetterId);
      $.ajax({
              url: 'userprojectajax.php',
              method: 'POST',
              data: {adminProjectId: adminProjectId},
              success: function(data) {
                var response = JSON.parse(data);
                console.log(response[0].id);
                var admin_ID = $("#admin_ID").val(response[0].id);
                var adminName = $("#adminName").val(response[0].name);
                var adminEmail = $("#adminEmail").val(response[0].email);
                
              }
            });
    })
</script>