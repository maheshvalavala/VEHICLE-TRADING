<?php
 session_start();
 
include 'db.php';
 $login = mysqli_query($conn,"SELECT * FROM signup WHERE (Username = '" .($_POST['Username']) . "') and (psw = '" .($_POST['psw']) . "')");
 $row=mysqli_fetch_array($login);  
 
 if(is_array($row)){
 $_SESSION['Username'] = $row['Username'];
 $_SESSION['psw'] = $row['psw'];
 echo '<script>windows: location="home.php"</script>';
	}
	else {
		echo '<script>alert("invalid Username/ psw")</script>';
        echo '<script>windows: location="index.php"</script>';
		}
 ?>