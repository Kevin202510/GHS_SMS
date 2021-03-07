<?php
include 'include/header.php';
include 'include/navigation.php';
include 'include/script.php';
$name=$_SESSION['name'];
if($_SESSION['role_id']==1){
    echo '<script>Swal.fire({position: "center", icon: "success", title: "WELCOME ADMINISTRATOR \n '.$name.'", showConfirmButton: false, timer: 1500, footer: "<a>GHS.COM</a>"});</script>';
}
else if($_SESSION['role_id']==3){
    echo '<script>Swal.fire({position: "center", icon: "success", title: "WELCOME \n '.$name.'", showConfirmButton: false, timer: 1500, footer: "<a>GHS.COM</a>"});</script>';
}
else{
    echo "<script>alert('Sorry You cannot Browse Student Part')
        var kev=window.history.back();
        location.replace(kev)
        </script>";
}
?>
<div class="card">
    <div class="card-body">
    <video loop src="img/video-bg.mp4" width="100%" height="500vh" autoplay muted></video>
    </div>
</div>
<?php 
    include 'include/footer.php';
?>