<?php
include 'include/header.php';
include 'include/navigation.php';
include 'include/script.php';
$name=$_SESSION['name'];
$id=$_SESSION['id'];
if($_SESSION['role_id']==3){
?>
<div class="card">
      <div class="card-header with-border">
          <?php if($_SESSION['role_id']==2){?>
        <a href="#" data-toggle="modal" data-target="#schoolyear" class="btn btn-success mb-2" style="position:absolute;"><span class="fa fa-plus"></span></a>
          <?php }else if($_SESSION['role_id']==3){ ?>
            <a href="printreportcard.php?id=<?php echo $_SESSION['id'] ?>" class='btn btn-info btn-sm'><i class="fa fa-print"></i><span class='glyphicon glyphicon-edit'></span></a>
            <?php } ?>
        <h2 class="card-title text-center">Grades</h2>
    </div> 
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>School Year</th>
          <th>Subject</th>
          <th>1st Quarter</th>
          <th>2nd Quarter</th>
          <th>3rd Quarter</th>
          <th>4th Quarter</th>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM users RIGHT JOIN grades ON users.id = grades.student_id RIGHT JOIN subjects ON subjects.id = grades.subject_id RIGHT JOIN schoolyears ON schoolyears.id = grades.schoolyear_id WHERE users.id=$id";

          //use for MySQLi-OOP
          $query = $conn->query($sql);
          while($row = $query->fetch_assoc()){

          ?>
          <tr>
              <td><?php echo $row['school_year'] ?></td>
              <td><?php echo $row['sub_name'] ?></td>
              <td><?php echo $row['first_grading'] ?></td>
              <td><?php echo $row['second_grading'] ?></td>
              <td><?php echo $row['third_grading'] ?></td>
              <td><?php echo $row['fourth_grading'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
    <?php include 'schoolyear_modal.php';?> 
    <!-- <script src="javascript/student/index.js"></script> -->
</div>
<?php
    } 
        include 'include/footer.php';
?>