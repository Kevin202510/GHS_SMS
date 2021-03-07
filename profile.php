<?php
include 'include/header.php';
include 'include/navigation.php';
include 'include/script.php';

if($_SESSION['role_id']!=3){
    echo '<script>Swal.fire({position: "center", icon: "success", title: "WELCOME ADMINISTRATOR \n '.$name.'", showConfirmButton: false, timer: 1500, footer: "<a>GHS.COM</a>"});</script>';
}
$id=$_SESSION['id'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
          $query = $conn->query($sql);
          while($row = $query->fetch_assoc()){
?>
<div class="card">
    <div class="card-body">
        <img class="img-profile rounded-circle" src="images/<?php echo $row['profile']; ?>" width="150px" style="margin-bottom:20px">
        <h3>FullName: <?php echo $row['name'] ?></h3>
        <h3>Age: <?php echo $row['age'] ?></h3> 
        <h3>Address: <?php echo $row['address'] ?></h3>
        <h3>Username: <?php echo $row['username'] ?></h3>
        <a href='#<?php echo $row['id'] ?>' class='btn btn-success form-control' data-toggle="modal" data-target="#usermodal">Update Profile</a>     
    </div>
</div>
<?php 
    }
    include 'user_modal.php';
    include 'include/footer.php';
?>