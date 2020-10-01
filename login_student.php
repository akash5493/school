<?PHP

	error_reporting(0);
    mysql_connect("localhost","root","");
    mysql_select_db("fps123");
    error_reporting(0);
    $username = mysql_real_escape_string($_POST['user']);
	$password = mysql_real_escape_string($_POST['roll']);
	

    $message = "Enter Login Id and password";

    if($username == "" || $password == "")
	{
		$message = "Please Enter Login Id And Password ";
		header("location:index?message=$message");
	}

	else
	{
		$sql = "SELECT * FROM `student` where `Username` = '$username' and `Rollno` = '$password'";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		if($num > 0)
		{
			$row = mysql_fetch_array($result);
			//$username = $row['Username'];
			session_start();

			$_SESSION['username']= $username;
			$_SESSION['password']= $password;
			
			

			if(isset($_POST['check']))
			{
				$check = $_POST['check'];
				setcookie('username',$login_id,time()+60,'/');
				setcookie('password',$password,time()+60,'/');
			}
			header("location:sap");
		}
		else
		{
			$message="Wrong Login Id Or Password";
			header("location:index?message=$message");
		}
	}			
?>
