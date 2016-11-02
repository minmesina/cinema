<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
  <title>WM Cinema || Add Movie</title>

</head>
<body>
	<h3>NEW SHOWING</h3>
		<form method="post" action="add.php" enctype="multipart/form-data">
			
				<div class="fld"><input type="file" name="image" required/></div>
			<label>Cinema</label><div class="fld"><input type="text" name="cinema" required/></div>
			<label>Title:</label><div class="fld"><input type="text" name="title" required/></div>
			<label>Rating:</label><div class="fld"><input type="text" name="rating" required/></div>
			<label>Date:</label><div class="fld"><input type="text" name="date" required/></div>
			<label>Time:</label><div class="fld"><input type="text" name="time" required/></div>
			<br><br><input type="Submit" id="button" name="button" value="SAVE">
			
		</form>
		<a href="admin_page.php" id="cancel">CANCEL</a>
</body>

</html>