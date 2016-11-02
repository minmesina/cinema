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
			 onclick="self.location.href=this.value;">
			<label for="label1"> &nbsp;Showing&nbsp;&emsp; </label>
		</form>
	</li>
    <li><form>
			<input type="radio" id="label2" value="coming_soon.php"
			 onclick="self.location.href=this.value; return true;" checked>
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
  <title>WM Cinema || Coming Soon</title>
	<style>
		
	</style>
</head>
<body>
	<div class="container">
	<img class="logo1" src="images/logo.png" />
	<h1>Coming Soon!</h1>
	
	<table>
	
	<?php
		
			$result = mysqli_query($con,"SELECT * FROM cooming_soon");

			while($row = mysqli_fetch_array($result))
			{ 
			echo '<div class="contcs">';
            echo '<img class="image" height="300" width="200" src="data:image;base64,'.$row[4].' ">';
			echo "<div class='details'><br><br><p><b>".$row['cs_title']."</b></p>
			<p class='desc'><b>Description:</b> ".$row['description']."</p>
			</div></div>";
		} 
		
	
		?>	
		
	</table>
	</div>
</body>
</html>