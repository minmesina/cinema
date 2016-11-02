<?php
	require("connection.php");
		
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
	
	$id=$_POST['id'];
	
		$sql= "SELECT * FROM movies WHERE id = $id";
			$result = mysql_query($con,$sql);
			
			mysqli_query($con,"UPDATE movies SET name = '$name', image ='$image' WHERE id = $id;");
	
	?>
<script>
	document.location="admin_page.php";
</script>	