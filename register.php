<?php
if(isset($_POST['username']))
{
$con = mysqli_connect('localhost', 'root', '','major_project');
$username = $_POST['username'];
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
$sql = "INSERT INTO `register` (`Id`, `username`, `mobile_no`, `password`) 
VALUES ('0', '$username', '$mobile_no', '$password')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Details Entered Successfully";
}
}
else
{
	echo "Failed";
	
}
?>