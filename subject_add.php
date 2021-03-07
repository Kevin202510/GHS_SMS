<?php 
    include 'include/header.php';
    include 'include/connection.php';

    if(isset($_POST['engrave'])){
		$code = $_POST['code'];
		$name = $_POST['name'];
		$sql = "INSERT INTO subjects (code,sub_name) VALUES ('$code','$name')";
        // header("Location: student.php");
        if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		if($_SESSION['role_id']==1){
        echo '<script>
			location.replace("subject.php");
            </script>';
        }
    }
    
?>