<?php
$title = "GOGONHIGHSCHOOL";
session_start(); 
$role=$_SESSION['role_id'];
echo $role;

if($role==1){
    header("Location: Dashboard.php");
    exit();
}else if($role==2){
    header("Location: TeacherDashboard.php");
    exit();
}else if($role==3){
    header("Location: StudentDashboard.php");
    exit();
}else{
    header("Location: loginform.php");
    exit();
}
?>