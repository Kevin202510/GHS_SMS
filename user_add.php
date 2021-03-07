<?php 
    include 'include/header.php';
	include 'include/connection.php';
    if(isset($_POST['engrave']) ||isset($_POST['reg']) ){
		$role_id = $_POST['role_id'];
		$profile = $_POST['profile'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "INSERT INTO users (role_id,profile,name,age,address,username,password) VALUES ('$role_id','$profile','$name', '$age','$address','$username','$password')";
        // header("Location: student.php");
        if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
	if($_SESSION['role_id']==1){
			if($role_id==2){
			echo '<script>
					location.replace("teacher.php");
				</script>';
			}else{
				echo '<script>
					location.replace("student.php");
				</script>';
			}
		}else{
			echo '<script>
				location.replace("loginform.php");
			</script>';
		}
}
	}
    
?>