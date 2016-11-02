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
    $result = mysqli_query($con,$sql);
?>

<body>

<h3>EDIT INFO</h3>
	<?php
		while($row = mysqli_fetch_array($result)){?>
		<form method="post" action="edit.php" enctype="multipart/form-data">
				<label>Cinema No.:</label><div class="fld"><input type="Text" name="cinema" value="<?php echo "$row[cinema]"; ?>" required/><br></div>
				<label>Title:</label><div class="fld"><input type="Text" name="title" value="<?php echo "$row[title]"; ?>" required/><br></div>
				<label>MTRCB Rating:</label><div class="fld"><input type="Text" name="rating" value="<?php echo "$row[rating]"; ?>" required/><br></div>
				<fieldset class="fldset" name="add">
				<label>Date:</label><div class="fld"><input type="Text" name="date" value="<?php echo "$row[date]"; ?>" required/><br></div>
				<label>Time Schedule:</label><div class="fld"><input type="Text" name="time" value="<?php echo "$row[time]"; ?>" required/><br></div>
				</fieldset>
				<input type="hidden" name="id" id="hiddenField" value="<?php echo "$row[id]";?>"/><br>
	
				<input type="Submit" id="button11" name="Okay" value="UPDATE">
		</form><a href="admin_page.php" id="cancel11">CANCEL</a>
		<?php } ?>
		
</body>
</html>