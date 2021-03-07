<?php
include 'include/header.php';
$name=$_SESSION['name'];
if($_SESSION['role_id']!=1){
    echo "<script>alert('Sorry You cannot Browse Admin Part')
            var kev=window.history.back();
            location.replace(kev)
        </script>";
}else{
include 'include/navigation.php';
include 'include/script.php';
    echo '<script>Swal.fire({position: "center", icon: "success", title: "WELCOME ADMINISTRATOR \n '.$name.'", showConfirmButton: false, timer: 1000, footer: "<a>GHS.COM</a>"});</script>';
}
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <a href="student.php" class="nav-link">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Students</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            $sql = "SELECT * FROM `users` WHERE role_id=3";
                            $query = $conn->query($sql);
                            $num_rows = mysqli_num_rows($query);
                            echo $num_rows;
                        ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <a href="teacher.php" class="nav-link">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Teachers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            $sql = "SELECT * FROM `users` WHERE role_id=2";
                            $query = $conn->query($sql);
                            $num_rows = mysqli_num_rows($query);
                            echo $num_rows;
                        ?>
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Tasks Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <a href="subject.php" class="nav-link">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Subjects</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            $sql = "SELECT * FROM `subjects`";
                            $query = $conn->query($sql);
                            $num_rows = mysqli_num_rows($query);
                            echo $num_rows;
                        ?>
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

     <!-- Tasks Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <a href="schoolyear.php" class="nav-link">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            School Year</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            $sql = "SELECT * FROM `schoolyears`";
                            $query = $conn->query($sql);
                            $num_rows = mysqli_num_rows($query);
                            echo $num_rows;
                        ?>
                        </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'include/footer.php';
?>