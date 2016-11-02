<?php
	require("connection.php");
?>	

<html>
<head>
  <title>ADD COMING SOON MOVIE</title>
</head>
<body>

<?php

	if(isset($_POST['button'])){
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                }
            }
	}

	$cs_title=$_POST['cs_title'];
	$description=$_POST['description'];
	
	$sql = "INSERT INTO cooming_soon (cs_title,description, name, image) 
	VALUES ('$cs_title','$description','$name','$image')";
	
	if (!mysqli_query($sql,$conn))
					{
					die('Error querying database' . mysql_error());
					}
			
?>

</body>
</html>
<script>
	document.location="coming_soon.php";
</script>