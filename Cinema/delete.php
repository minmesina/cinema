<?php
	require("connection.php");
    $res = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM moview WHERE id='$res'");
	
?>
	
	<?php
		$sql="DELETE FROM moview WHERE id = '$res'";
		$result=mysqli_query($con,$sql);
	?>
	
	<script>document.location = "admin_page.php"</script>
