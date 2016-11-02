<html>
<head>
  <title>WM Cinema || Edit Movie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
	require("connection.php");
	$_GET['id'];
	$id=$_GET['id'];
    $sql= "SELECT * FROM cooming_soon WHERE id = $id";
    $result = mysqli_query($con,$sql);
?>

<body>

<h3>EDIT INFO</h3>
	<?php
		while($row = mysqli_fetch_array($result)){?>
		<form method="post" action="editcs.php" enctype="multipart/form-data">
				<label>Title:</label><div class="fld"><input type="Text" name="cs_title" id="cs_title" value="<?php echo "$row[cs_title]"; ?>" required/><br></div>
				<label>Description:</label><div class="fld"><textarea rows="20" cols="60" name="description" required><?php echo "$row[description]"; ?></textarea><br></div>
				<input type="hidden" name="id" id="hiddenField" value="<?php echo "$row[id]";?>" />
				<input type="Submit" id="button1" name="Okay" value="UPDATE">
		</form><a href="coming_soon.php" id="cancel1">CANCEL</a>
		<?php } ?>
		
</body>
</html>