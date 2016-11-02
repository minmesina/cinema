<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>WM Cinema || Coming Soon</title>

</head>
<body>
	<h3>ADD COMING SOON MOVIE</h3>
		<form method="post" action="addcs.php" enctype="multipart/form-data">
			<label>Title:</label><div class="fld"> <input type="Text" name="cs_title" id="cs_title" required><br></div>
			<label>Description:</label><div class="fld"> <textarea rows="10" cols="60" name="description" required></textarea><br><br></div>
				<div class="fld"><input type="file" name="image" required/></div><br>
			
			<input type="Submit" id="button" name="button" value="SAVE">
			
		</form>
		<a href="coming_soon.php" id="cancel">CANCEL</a>
</body>

</html>