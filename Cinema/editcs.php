<?php
	require("connection.php");

                if(getimagesize($_FILES['image']['tmp_name']) == "")
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
	$cs_title=$_POST['cs_title'];
	$description=$_POST['description'];
		$sql= "SELECT * FROM cooming_soon WHERE id = $id";
			$result = mysqli_query($con,$sql);
			
			mysqli_query($con,"UPDATE cooming_soon SET  cs_title =  '$cs_title', description =  '$description', name = '$name', image ='$image' WHERE id = $id;");
	
	?>
<script>
	document.location="coming_soon.php";
</script>
