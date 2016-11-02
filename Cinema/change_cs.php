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
	
		$sql= "SELECT * FROM coming_soon WHERE id = $id";
			$result = mysql_query($con,$sql);
			
			mysqli_query($con,"UPDATE coming_soon SET name = '$name', image ='$image' WHERE id = $id;");
	
	?>
<script>
	document.location="coming_soon.php";
</script>	