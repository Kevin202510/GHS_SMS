<?php 
    include 'include/header.php';
    echo $_SESSION['role_id'];
    include 'include/connection.php';

    if(isset($_POST['engrave'])){
		$schoolyear = $_POST['school_year'];
		$batchname = $_POST['batch_name'];
		$sql = "INSERT INTO schoolyears (school_year,batch_name) VALUES ('$schoolyear','$batchname')";
        // header("Location: student.php");
        if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		if($_SESSION['role_id']==1 || $_SESSION['role_id']==2){
        echo '<script>
			location.replace("schoolyear.php");
            Swal.fire({position: "top-end", icon: "success", title: "Your work has been saved", showConfirmButton: false, timer: 1500, footer: "<a>GHS.COM</a>"});
            </script>';
        }
    }
    
?>