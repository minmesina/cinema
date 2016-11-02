<?php
    require("connection.php");
?>

<html>
<head>
	<script src="script.js"></script>
  <title>WM Cinema || Add Movie</title>
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

	$cinema=$_POST['cinema'];
	$title=$_POST['title'];
	$rating=$_POST['rating'];
	$date=$_POST['date'];
	$time=$_POST['time'];

	
	$sql = "INSERT INTO moview (cinema,title,rating,date,time,name, image) 
	VALUES ('$cinema','$title','$rating','$date','$time','$name','$image')";

	
	if (!mysqli_query($sql,$conn))
					{
					die('Error querying database' . mysql_error());
					}
					
	
?>

</body>
</html>
<script>
	document.location="admin_page.php";
</script>