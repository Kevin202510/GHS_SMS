<?php
include 'include/header.php';
include 'include/script.php';
$name=$_SESSION['name'];
$id=$_GET['id'];
if($_SESSION['role_id']==3 || $_SESSION['role_id']==2){
?>
<div class="card" onload="prints();">
      <div class="card-header with-border">
        <h2 class="card-title text-center">Grades</h2>
    </div> 
    <div class="card-body">
      <table class="table table-hover">
        <thead>
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
    <script>
        function prints(){
            window.print();
        }
        prints();
    </script>
</div>
<?php } ?>