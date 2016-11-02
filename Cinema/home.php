<?php
require("connection.php");
session_start();
if (($_SESSION['user'])=="admin"||($_SESSION['user'])==""){
header('location:index.php');
}
?>

<ul id="navbar">

    <li><form>
			<input type="radio" id="label1" value="home.php"
			 onclick="self.location.href=this.value;" checked>
			<label for="label1"> &nbsp;Showing&nbsp;&emsp; </label>
		</form>
		
	</li>
    <li><form>
			<input type="radio" id="label2" value="view_comingsoon.php"
			 onclick="self.location.href=this.value; return true;">
			<label for="label2"> Coming&nbsp;Soon&nbsp; &emsp;&emsp;</label>
		</form>
	</li> 
	<li><form>
			<input type="radio" id="label3" value="index.php"
			 onclick="self.location.href=this.value; return true;">
			<label for="label3"> &nbsp;Log&nbsp;out&nbsp; </label>
		</form>
	</li> 
</ul>
</br>
</br>

<?php
$account_id=$_SESSION['account_id'];

$result=mysqli_query($con,"select * from account where account_id='$account_id'")or die(mysql_error);
$row=mysqli_fetch_array($result);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
  <title>WM Cinema || NOW SHOWING</title>
	<style>
		
	</style>
</head>
<body>
	<img class="logo3" src="images/logo.png" />
	<h1>NOW SHOWING!</h1>
	<table>
	<?php
		
			$result = mysqli_query($con,"SELECT * FROM moview");

			while($row = mysqli_fetch_array($result))
			{ 
		echo '<div class="cont1">';
            echo '<img class="image" height="300" width="200" src="data:image;base64,'.$row[7].' "><br><br>';
			echo "<div class='details'><p><b>Cinema: </b>".$row['cinema']."</p>
			<p><b>Title:</b> ".$row['title']."</p>
			<p><b>MTRCB Rating:</b> ".$row['rating']."</p>
			<p><b>Schedule:</b><br><br>&emsp;".$row['date']."</p>
			<p><b>Time:</b>".$row['time']."</p>
			</div></div>";
		} 
		
	
		?>	
	</div>
	</table>
	
</body>
</html>