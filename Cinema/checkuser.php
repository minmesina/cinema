<?php
require("connection.php");

if (isset($_POST['submit'])) {
$username=$_POST['userName'];
$password=$_POST['password'];
$result=mysqli_query($con,"select * from admin_accounts where username='$un' and password='$pw'")or die (mysqli_error());
		
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
		
		if ($count > 0){
		session_start();
		$_SESSION['admin_id']=$row['admin_id'];
		header('location:home.php');
		}
	else{
		die('Username and Password does not match <br/>
			<a href="index.php"> click to go back</a>'.mysqli_error());
	}
}		
?>