<?php
	require("connection.php");
    $res = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM coming_soon WHERE id='$res'");
	
?>
	
	<?php
		$sql="DELETE FROM cooming_soon WHERE id = '$res'";
		$result=mysqli_query($con,$sql);
	?>
	
	<script>document.location = "cooming_soon.php"</script>
