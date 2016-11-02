<?php
require("connection.php");
session_start();
if (($_SESSION['user'])=="guest"||($_SESSION['user'])==""){
header('location:index.php');
}
?>
<ul id="navbar">

    <li><form>
			<input type="radio" id="label1" value="admin_page.php"
			 onclick="self.location.href=this.value;" checked>
			<label for="label1"> &nbsp;Showing&nbsp;&emsp; </label>
		</form>
		
	</li>
    <li><form>
			<input type="radio" id="label2" value="coming_soon.php"
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
  <title>WM Admin || Now Showing</title>
	<style>
		
	</style>
</head>
<body>
<div class="container">
	<img class="logo1" src="images/logo.png" />
	<h1>NOW SHOWING!</h1>
	<a href="add_showing.php" id='addshowing'>ADD SHOWING</a>
	<table>
	<?php
		
			$result = mysqli_query($con,"SELECT * FROM moview");

			while($row = mysqli_fetch_array($result))
			{ 
			echo '<div class="cont3">';
            echo '<img class="image" height="300" width="200" src="data:image;base64,'.$row[7].' "><br>';
			echo "<div class='details'><p>".$row['cinema']."</p>
			<p><b>Title:</b> ".$row['title']."</p>
			<p><b>MTRCB Rating:</b> ".$row['rating']."</p>
			<p><b>Schedule:</b><br><br>&emsp;".$row['date']."</p>
			<p><b>Time:</b>&emsp;".$row['time']."</p>
			<br><br><br><br><br>
			<a href='editform.php?id=".$row["id"]."' id='edit'>UPDATE</a><br>
			<a href='changeimg.php?id=".$row["id"]."' id='change'>CHANGE IMAGE</a><br><br><br>
			<a href='delete.php?id=".$row["id"]."' id='delete'>DELETE</a></div></div>";
		} 
		
	
		?>	
	</table>
	</div>
</body>
</html>