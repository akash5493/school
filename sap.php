
<!DOCTYPE HTML>
<html>
<head>
<title>Frontline Public School,Nawada,Bihar-About </title>
<link rel="icon" href="favicon.ico" sizes="16x16" type="image/ico">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<?PHP


	error_reporting(0);
    mysql_connect("localhost","root","");
    mysql_select_db("fps123");
    ?>
	<!----- start-header---->
			<div id="home" class="header two">
					<div class="top-header">
						<div class="top-header-child">
						<div class="container">
						<img src="images/logo.png" class="img-logo"/>
						<div class="logo">
							<a href="index"><h1>FRONTLINE  &nbsp <span> Public School</span></h1></a>
							
					<!----start-top-nav---->
						<div class="top-menu">
							<span class="menu"> </span>
								<ul class="cl-effect-16">
								 <li><a href="index" data-hover="Home">Home</a></li>
								<li><a class="active" href="std-det" data-hover="Student Details">Student Details</a></li>
								<li><a  href="fee-det" data-hover="Fee Details">Fee Details</a></li>
								<li><a href="results" data-hover="Results">Results</a></li>
								
								<!---welcome user script-->
								<div class="user-menu">
								<p align="right"> 
								
		
    
								Logged As 
<?php 							session_start();

								//error_reporting(0);
								mysql_connect("localhost","root","");
								mysql_select_db("fps123");
							#	$sql = "SELECT * FROM student where Username = 'username' and Rollno='password'";
								//$sql1="SELECT Rollno from student where Username='username'";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result);
		$q=$_SESSION['username'];
		echo $q;
		$q1=$_SESSION['password'];	
		$q2=$_SESSION['Class'];
		
		
		?>
		
								</div>
						</div>
								  <div class="clearfix"></div>
								  
								</ul>
							</div>
							
								<!-- script-for-menu -->
							<div class="clearfix"> </div>
					</div>
				</div>

			    <div class="clearfix"> </div>
			</div>
		</div>
		<!----- //End-slider---->
<!---start-slide-bottom--->
			<div class="about-section">
				 <div class="container">
				     <div class="about-head">
							<h3>Welcome to F.P.S Student Portal</h3>
							<p>A Few words about us</p>
					 </div>
					 </div>
					 </div>
					 
			
											<div class="std-det">
											<div class="std-img">
											
														<img src="/images/logo.png" width="140" height="160">	
											</div>
															<?php
															$username=$_SESSION['username'];
															$password=$_SESSION['password'];
									
									        mysql_connect("localhost","root","");
											mysql_select_db("fps123");
											error_reporting(0);
											$x= "select * from student where Username='$username' and Rollno='$password'";
											$res=mysql_query($x);
											$row=mysql_fetch_array($res);
											$username1=$row['Username'];
											$password1=$row['Rollno'];
											$regno=$row['RegistrationNo'];
											$class= $row['Class'];
											$add= $row['Address'];
											$pname= $row['Parent'];
											$contact= $row['Contact'];
											?>

											<div class="container">
												<div class="row">
													<div class="col-md-4">
													<?php echo "Name"; ?>
													</div>
													<div class="col-md-8">
													<?php echo ucfirst("$username1"); ?>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
													<?php echo "Roll";?>
													</div>
													<div class="col-md-8">
													<?php echo "$password1";?>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
													<?php echo "Registration No";?>
													</div>
													<div class="col-md-8">
													<?php echo "$regno";?>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
													<?php echo "Class";?>
													</div>
													<div class="col-md-8">
													<?php echo "$class";?>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
													<?php echo "Address"; ?>
													</div>
													<div class="col-md-8">
													<?php echo "$add"; ?>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
													<?php echo "Parent Name"; ?>
													</div>
													<div class="col-md-8">
													<?php echo "$pname"; ?>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
													<?php echo "Contact" ; ?>
													</div>
													<div class="col-md-8">
													<?php echo "$contact"; ?>
													</div>
												</div>
											</div>
													
											

										
										<a href=#><p style="color:red;"><br> Result Download </p></a>
											 </div></div>
					
							<!----//End-slider-script---->
						
					
      
	 

					   <div>
					   <br>
					   <br>
					   <br>
					   <br>
					   <br>
					 <br>
					   <br><br>
					   <br>
					   <br>
					   <br>
					   <br>
					   <br>
					   <br>
					   <br>
					   <br>
					   <br>
					 <br>
					   <br><br>
					   <br>
					   <br>
					   <br>
					   <br><br>
					   <br>
					   <br>
					   <br>
					   <br>
					 <br>
					   <br><br>
					   <br>
					   <br>
					   <br>
					   <br>
					   
					   
					   
					   
					   </div>
			
       <!---start-about-bottom--->
		<div class="slide-bottom">
			<div class="slide-bottom-grids">
				 <div class="container">
					 <div class="col-md-6 slide-bottom-grid">
							<h3>Welcome!</h3>
							<p>Ruelloribus eget elemetum vel curleif end elit. for that matter even a relationship, for that matter even a relationship, Aean auctoetnliir pis terios. ante ipsummis fauulet utrice posere cubtsed leo pharetu nec augue. dui bibendum ornare elementum. In vel mi pellentesque.</p>
					 </div>
					 <div class="col-md-6 slide-bottom-grid">
					       <h3>Our Mission</h3>
						   <p>Ruelloribus eget elemetum vel curleif end elit. for that matter even a relationship, for that matter even a relationship, Aean auctoetnliir pis terios. ante ipsummis fauulet utrice posere cubtsed leo pharetu nec augue. dui bibendum ornare elementum. In vel mi pellentesque.</p>
					 </div>
					   <div class="clearfix"></div>
				 </div>
			 </div>
		</div>
		<div class="member-section">
			<div class="container">
				<div class="member-head">
						<h3>Our Members</h3>
					   <p>2015 Board Members</p>
					   </div>
			      <div class="members">
					   <div class="col-md-4 member-grids">
                              <a href="#"> <img src="images/m2.jpg" class="img-responsive" alt="" /></a>
								<h5>President</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="col-md-4 member-grids">
								<a href="#"> <img src="images/m3.jpg" class="img-responsive" alt="" /></a>
								<h5>Vice President</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

							</div>
							<div class="col-md-4 member-grids">
								<a href="#"> <img src="images/m1.jpg" class="img-responsive" alt="" /></a>
								<h5>Chief of Staff</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="clearfix"> </div>
					   </div>
				  </div>
			</div>
		</div>
<!--/mid-bg-->
	<div class="mid-bg">
		<div class="container">
			<div class="mid-section">
							</div>
		</div>
	</div>
	<!--address-->
	<div id="contact" class="address">
			<h3>Our Offices</h3>
			<ul class="address-top">
				<li>F.P.S , South-East of R.M.W College</li>
				<li>Nawada, Bihar</li>
			</ul>
			<ul class="address-mid">
				 <li>F.P.S, Chatar, Hasapur</li>
				 <li>Narhat, Nawada</li>
			</ul>
			<ul class="address-bottom">
				 <li>F.P.S Web Team</li>
				 <li>+91-9040434795</li>
				 <li><a class="mail" href="mailto:admin@fpsnawada.com"> admin@fpsnawada.com </a></li>
			</ul>
		 <div class="clearfix"></div>
	</div>
	<!--//address-->
		<!----footer--->
			<div class="footer">
				<div class="container">
					<div class="copy">
		              <p>&copy; 2015 All Rights Reserved Design by <a href="http://www.facebook.com/akash5493/">Akash & Aman</a> </p>
		            </div>
					
				</div>
			</div>
	<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>