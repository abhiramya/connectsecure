<?php 
$connect=mysqli_connect("localhost","root","","major_project") or die ("connection failed");
if(!empty($_POST['Submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from register where username='$username' and password ='$password'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "Login Successful";
	}
	else
	{
		echo "Login not success";
	}
}
?>
