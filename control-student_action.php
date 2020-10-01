
<?PHP
$Id=$_POST['Id'];
$Username=$_POST['Username'];
$Rollno=$_POST['Rollno'];
$RegistrationNo=$_POST['RegistrationNo'];
$Class=$_POST['Class'];
$Address=$_POST['Address'];
$Parent=$_POST['Parent'];
$Contact=$_POST['Contact'];
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("fps123");
$x= "insert into student(Id,Username,Rollno,RegistrationNo,Class,Address,Parent,Contact)values('$Id','$Username','$Rollno','$RegistrationNo','$Class','$Address','$Parent','$Contact')";
mysql_query($x);
	header("location:control-student");

?>