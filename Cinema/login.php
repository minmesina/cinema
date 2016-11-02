<?php

require("connection.php");

if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysqli_query($con,"select * from account where username='$username' and password='$password'")or die (mysqli_error());
		
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
	
		if ($count > 0){
		session_start();
			
			if("guest"==$row['user']){	
			$_SESSION['account_id']=$row['account_id'];
			header('location:home.php');}
			else if("admin"==$row['user']){
			$_SESSION['account_id']=$row['account_id'];
			header('location:admin_page.php');}
			
		}else{
		header('location:index.php');

		}
		$_SESSION['user']=$row['user'];
}
?>

