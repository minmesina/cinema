<?php
	require("connection.php");

	$id=$_POST['id'];
	$cinema=$_POST['cinema'];
	$title=$_POST['title'];
	$rating=$_POST['rating'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	
		$sql= "SELECT * FROM moview WHERE id = $id";
			$result = mysqli_query($con,$sql);
			
			mysqli_query($con,"UPDATE moview SET  cinema =  '$cinema', title =  '$title', rating = '$rating', date = '$date', time = '$time' WHERE id = $id");
	
	?>
	
<script>
	document.location="admin_page.php";
</script>	