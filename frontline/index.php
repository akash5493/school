<!doctype html>
<html class="no-js" lang="">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FPS Admin Page</title>
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="background_fps">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
						<h2 class="admin_login">FPS Admin LOGIN</h2>
                    </a>
                </div>
                <div class="login-form">
                    <a href="https://myschoolapp.co.in/schoolcare/?d=jeevanjy_frontline&type=school_admin&w=http://www.frontline.com"><button name="Submit" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Software Admin Login</button></a>
                    <br>
                    <br>
                    <a href="https://myschoolapp.co.in/schoolcare/?d=jeevanjy_frontline&type=parent&w=http://www.frontline.com"><button name="Submit" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Software Parent Login</button></a>
                </div>
            </div>
        </div>
    </div>

	<?php
    if(isset($_POST['Submit']))
    {
    
    login_process();
        
    if(isset($_SESSION['user_id']) and isset($_SESSION['password']))
    { 	
    ?>
    
        <script language="javascript">
        window.location="dashboard.php";
        </script>		
        <?php }
    else if(isset($_SESSION['user_id']) and isset($_SESSION['password']) and $_SESSION['who']=="User")
    { 	
    ?>

	<script language="javascript">
		window.location="index_main_user.php";
	</script>		
	<?php }
	else
	{ 		
		echo "<center><a href=index.php>Wrong user id or password</a></center>";
	}
	}
	?>

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>