<?php 
    include 'include/connection.php';

    if(isset($_POST['engrave'])){
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
		}
        echo '<script>
            location.replace("teacher.php");
            Swal.fire({position: top-end", icon: "success", title: "Your work has been saved", showConfirmButton: false, timer: 1500, footer: "<a>GHS.COM</a>"});
            </script>';
    }
    
?>