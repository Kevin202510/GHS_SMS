<?php
session_start(); 
include "include/connection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['profile'] = $row['profile'];
            	$_SESSION['role_id'] = $row['role_id'];
				echo $_SESSION['id'];
            	header("Location: Auth.php");
		        exit();
            }else{
				echo '<script>
				alert("Username or Password does not match");
				location.replace("loginform.php")
				</script>';
		        exit();
			}
		}else{
			echo '<script>
				alert("Username or Password does not match");
				location.replace("loginform.php")</script>';
	        exit();
		}
	
}else{
	header("Location: Auth.php");
	exit();
}
?>