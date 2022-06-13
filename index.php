<?php
require "database/dbconfig.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QAonboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>






 <header id="header">    
 <div class="topnavscrle">
    <nav role="navigation" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container-fluid">
           <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="nav navbar-nav ml-auto bgr">
                 <li class="nav-item"><a class="nav-link active" href="#bannerbg_imgscn">Home</a></li>
                 <li class="nav-item"> <a class="nav-link" href="#orsrvescrll">Services </a> </li>
                 <li class="nav-item"> <a class="nav-link" href="#howorkcrll">How we work </a></li>     
                 <li class="nav-item"><a class="nav-link" href="#pricecrll">Pricing</a></li>
                 <li class="nav-item"><a class="nav-link" href="#testimonlcrll">Testimonials</a></li>
                 <li class="nav-item"><a class="nav-link" href="#foter_bg">Contact US</a></li>
                 </ul>
                <ul class="nav navbar-nav navbtn">
                 <li class="nav-item"><a class="nav-link" href="#">Submit Project</a></li>
                 <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Login / Sign Up</a></li>
                </ul> 
            </div> 
            </div>   
        </nav>
    </div>
  </header>
<section id="bannerbg_imgscn">
<div class="tblecell">
    	<div class="container-fluid">

      <?php if(isset($_GET['msg']) || isset($_GET['status']) == 1): ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_GET['msg']; ?>
                        </div>
                    
                    <?php endif; ?>

                    
        	<div class="row">
            	<div class="col-sm-12">
                	<div class="banr_hdng">
         <h1>Better <strong>Testing</strong> Better <strong>Quality.</strong></h1>
         <p>Qualitest designs and delivers cutting-edge QA and software testing solutions</p>
            <a href="#">Get Started</a>
         <div class="clearfix"></div>
         </div>
         <div class="social_rgt">
           <!--social tags--> 
		   <ul>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
         </div>
         </div>
            </div>
            <div class="ar_img">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <a href="#orsrvescrll" class="hvr-hang"><img src="images/arrowdown.png" class="img-responsive"></a> </div>
      </div>
    </div>
  </div>
  <div id="orsrvescrll"></div>
        </div>
        </div>
 </section>
<section id="ourservice_scn">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="aalhang">	
              <h2>Our <span class="colr">Services</span></h2>
              <p>We'll leverage our experience testing on every major device, OS and browser to help you launch and<br> maintain the app you envisioned.</p>
           </div>
          </div>
          
        
      </div>
      <div class="row">
          <div class="col-md-4">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn.png" class="img-fluid" alt=""></div>
              <h3>Mobile Testing Services</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn1.png" class="img-fluid" alt=""></div>
              <h3>Security Testing Services</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4 bdrgtnne">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn2.png" class="img-fluid" alt=""></div>
              <h3>Hardware IV&V Services</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn3.png" class="img-fluid" alt=""></div>
              <h3>Test Process Improvement</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn4.png" class="img-fluid" alt=""></div>
              <h3>Unit Testing</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4 bdrgtnne">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn5.png" class="img-fluid" alt=""></div>
              <h3>Testing Consulting</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4 bdrbtmnne">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn6.png" class="img-fluid" alt=""></div>
              <h3>Website Testing</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4 bdrbtmnne">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn7.png" class="img-fluid" alt=""></div>
              <h3>Telecom Testing</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-4 bdrgtnne bdrbtmnne bdrbtmnne_mob">
            <div class="srvce_icn">
              <div class="zoom"><img src="images/servc_icn8.png" class="img-fluid" alt=""></div>
              <h3>Testing Automation</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          
          </div>
      <div id="howorkcrll">
	  </div>
    </div>
</section>
<section id="howork_scn">
  <div class="container">
     <div class="row">
          <div class="col-md-12">
            <div class="aalhang">	
              <h2>How It <span class="colr">Works</span></h2>
               

          </div>
          </div>
          
        
      </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <span class="timeline-icon"></span>
                    <span class="year"><img src="images/howorkimg.png" class="img-fluid dasktp" alt=""><img src="images/timlne-mob.png" class="img-fluid mobshw" alt=""></span>
                    <div class="timeline-content">
                        <h3 class="title">Submit your requirements</h3>
                        <p class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
 
                <div class="timeline">
                    <span class="timeline-icon"></span>
                    <span class="year"><img src="images/howorkimg1.png" class="img-fluid dasktp" alt=""><img src="images/timlne-mob1.png" class="img-fluid mobshw" alt=""></span>
                    <div class="timeline-content">
                        <h3 class="title">Meet your QA team</h3>
                        <p class="description">
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
                
                <div class="timeline">
                    <span class="timeline-icon"></span>
                    <span class="year"><img src="images/howorkimg2.png" class="img-fluid dasktp" alt=""> <img src="images/timlne-mob2.png" class="img-fluid mobshw" alt=""></span>
                    <div class="timeline-content">
                        <h3 class="title">Get thorough results</h3>
                        <p class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
      <div class="row">
          <div class="col-md-12">
            <div class="gtstdhwrk">	
              <a href="#">Get Started</a>
               

          </div>
          </div>
          
        
      </div>
     <div id="pricecrll"></div>
    </div>
  </section> 
  <section id="ourprice_scn">
  <div class="container">
     <div class="row">
          <div class="col-md-12">
            <div class="aalhang">	
              <h2>Our <span class="colr">Pricing</span></h2>
               <p>Our engineers work on a daily basis, in standard 8-hour intervals. Typically, the first day of testing includes going through the application,<br> logging a few bugs, and creating an effort estimate based on your requirements. Since no product is the same, this is the best option to <br>make sure you have clear visibility into the continued testing effort. </p> 

          </div>
          </div>
          
        
      </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="ourprice_box">
        <h3> Standard Plan. </h3>
          <h2> <strong class="colr"> $38</strong><span class="colrnne"> / </span> Per Day </h2>
          
          <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ourprice_box">
        <h3> Basic Plan. </h3>
         <h2> <strong class="colr"> $15 </strong> <span class="colrnne"> / </span> Per Hour </h2>
          <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="ourprice_box">
         <h3> Professional Plan. </h3>
         <h2> <strong class="colr"> $250 </strong> <span class="colrnne"> / </span> Per Weak </h2>
          <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
        </div>
      </div>
    </div>
    <div id="testimonlcrll"></div>
  </div>
</section>

<section id="quantetimonal">
  <div class="container">
    <div class="row">
          <div class="col-md-12">
            <div class="aalhang">	
              <h2>Our Happy <span class="colr">Clients Says </span></h2>
                
 
          </div>
          </div>
          
        
      </div>
    <div class="row">
        
        <div class="col-md-12">
        <div class="bd-example">
             <div id="carouselExampleIndicators1" class="carousel slide testmonal" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
  </ol>
  
     
    
  <div class='carousel-inner'>
			
			<?php
              include 'db_connection.php';
                $connection = OpenCon();
								  
					$rs = mysqli_query($connection,"SELECT * FROM testimonial");  
					if (mysqli_num_rows($rs) > 0)
					{
						$count =1;
					   while ($row = $rs->fetch_assoc()) 
					   {
							
              				echo '<div class="carousel-item" id="car'.$count++.'">
							  <div class="timonal_cntnt">
											
											<img src="images/testiimg.png" class="img-responsive" alt="">
												<p>'.$row["views"].'</p>
												<h3>'.$row["name"].'</h3>
												<small>'.$row["company"].'</small>
										   </div>
							</div>';
						 }
					}
					   CloseCon($connection);
?>
  </div>


 <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   
</div> 
      </div>
    </div>
   
  </div>
  
</section>

<footer id="foter_bg">
 
  <div class="container">
    <div class="row">
          <div class="col-md-12">
            <div class="ftrallcntnt">	
              <div class="row">
          <div class="col-md-4">
          <div class="foter_logo">
          <a href="#"><img src="images/logo1.png" class="img-fluid" alt=""></a>
          </div>
          </div>
          <div class="col-md-8">
          <div class="foter_menu">
          <ul>
             <li><a href="#">Home</a></li>
             <li><a href="#">Services</a></li>
             <li><a href="#">How we work</a></li>
             <li><a href="#">Pricing</a></li>
             <li><a href="#">Testimonials</a></li>
          </ul>
          </div>
          </div>
          </div>
          <div class="bodr">
              <div class="row">
              <div class="col-md-4">
          <div class="foter_info">
          <div class="media">
              <i class="fa fa-phone mr-3" aria-hidden="true"></i>
              <div class="media-body">
                <h5 class="mt-0">Phone Number</h5>
                <p>+0123 456 789</p>
              </div>
            </div>
          </div>
          </div>
              <div class="col-md-4">
          <div class="foter_info">
          <div class="media">
              <i class="fa fa-envelope-o mr-3" aria-hidden="true"></i>
              <div class="media-body">
                <h5 class="mt-0">Email Us</h5>
                <p>info@qaonboard.com</p>
              </div>
            </div>
          </div>
          </div>
              <div class="col-md-4">
          <div class="foter_info">
          <div class="media">
              <i class="fa fa-map-marker mr-3" aria-hidden="true"></i>
              <div class="media-body">
                <h5 class="mt-0">Location</h5>
                <p>42 Tailstoi, Town 01,New York</p>
              </div>
            </div>
          </div>
          </div>
          </div>  
          </div>
              <div class="row">
              <div class="col-md-6">
          <div class="foter_social">
          <p>© Copyright 2019 QAONBOARD. All Rights Reserved.</p>
          
          </div>
          </div>
              <div class="col-md-6">
          <div class="foter_social">
          <ul class="soclicn">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        
                     </ul>
          </div>
          </div>
           
          </div> 
          </div>
          </div>
          
        
      </div>
    
  </div>






</footer>

<div id="signlogin_modl">
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
     <h5 class="modal-title">QUonboard Login & Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modltap">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a>
  </li>
 
</ul>



<!-- USER LOGIN FORM -->
<div class="tab-content" id="myTabContent">
<?php if(isset($_GET['msg']) || isset($_GET['status']) == 1): ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_GET['msg']; ?>
                        </div>
                    
                    <?php endif; ?>
  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
  <form id="quickForm" method="POST" action="code.php">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="emaill" class="form-control" placeholder="Enter email" required="">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="passwordd" class="form-control" placeholder="Password" required="">
  </div>
  <div class="form-group forget">
    <a href="#" data-toggle="modal" data-target="#fpassModalCenter">Forgot Password</a>
  </div>
  <button type="submit" name="Login" class="btn"> <a>Login </a></button>
</form>
</div>
<!-- END LOGIN FORM -->



<!-- REGISTRATION FORM -->
  <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
    <form method="POST" action="code.php">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="Names" class="form-control" placeholder="Name" required="">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" name="Phone" class="form-control" placeholder="Phone" required="">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required="">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="Password" class="form-control" placeholder="Password" required="">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="Cpassword" class="form-control" placeholder="Confirm Password" required="">
  </div>

  <input type="hidden" name="Usertype" class="form-control" value="User">
  
  <button type="submit" name="Signup" class="btn"><a> Register </a></button>
</form>
  </div>
  <!-- END REGISTRATION FORM -->



  
</div>
       
</div>
      </div>
     
    </div>
  </div>
</div>

</div>   
<script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/popper.min.js" type="text/javascript"></script> 

<script>
$(document).ready(function(){
  $('.bgr li a').click(function(){
    $('.bgr li a').removeClass("active");
    $(this).addClass("active");
});

$("#car1").addClass("active");

});



</script>
<!--<script>

$(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});
// hide .navbar first
   // $("nav").hide();
</script>-->



<script type="text/javascript">
  $('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').removeClass('show');
  });
</script>

<script>

</script>

</body>



</html>




  <!-- Modal -->
  <div class="modal fade" id="fpassModalCenter" tabindex="-1" role="dialog" aria-labelledby="fpassModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div style="background: #e3001b;" class="modal-header text-light">
        <h5 class="modal-title" id="fpassModalLongTitle">Forgot Password</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="quickForm" method="POST" action="code.php">
      <div class="form-group">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required="">
      </div>
      <div class="form-group">
        <label>New Password</label>
        <input type="password" name="new_password" class="form-control" placeholder="Password" required="">
      </div>
      <div class="form-group">
        <label>Confirm New Password</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Password" required="">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button style="background: #302a5c; cursor: pointer;" type="submit" name="change_pass" class="btn text-light">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- <script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 8
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script> -->