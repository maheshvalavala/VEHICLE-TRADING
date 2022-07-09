<?php
include 'db.php';
	$id = $_POST['id'];
	mysqli_query($conn,"DELETE from sell WHERE id='$id'");
			
    echo '<script>alert("Money is Automatically Withdrwan from your account")</script>';
		 echo "<script>windows: location='final.php'</script>";