<html>
<head>
  <title>WM Cinema || Edit Movie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
	require("connection.php");
	$_GET['id'];
	$id=$_GET['id'];
    $sql= "SELECT * FROM moview WHERE id = $id";
    $result = mysql_query($con,$sql);
?>

<body>
<br>
<h3>CHANGE IMAGE</h3>
	<?php
		while($row = mysqli_fetch_array($result)){?>
		<form method="post" action="change.php" enctype="multipart/form-data">
		
				<input type="hidden" name="id" id="hiddenField" value="<?php echo "$row[id]";?>"/><br>
				<div class="fld"><input type="file" name="image" required/></div>
				<input type="Submit" id="button11" name="Okay" value="UPDATE">
		</form><a href="admin_page.php" id="cancel11">CANCEL</a>
		<?php } ?>
		
</body>
</html>