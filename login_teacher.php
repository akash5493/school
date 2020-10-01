<?PHP
$username=$_POST['user'];
$password=$_POST['pass'];
session_start();

mysql_connect("localhost","root","");
mysql_select_db("fps");
$x= "select * from teacher where Username='$username' and Rollno='$password'";
$res=mysql_query($x);
$num=mysql_num_rows($res);

if($num>0)
{
	
	$_SESSION['username']=$username;
	$user_id=$_SESSION['username'];
   echo " USER NAME N PASSWORD IS VALID";
	header("location:about");
}
else if($num==0)
{   echo " USER NAME N PASSWORD IS INVALID";
	header("location:admissions");
}
?>
