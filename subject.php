<?php
include 'include/header.php';
include 'include/navigation.php';
include 'include/script.php';
if($_SESSION['role_id']==1 || $_SESSION['role_id']==2){
?>
<div class="card">
      <div class="card-header with-border">
      <?php if($_SESSION['role_id']==1){?>
        <a href="#" data-toggle="modal" data-target="#subject" class="btn btn-success mb-2" style="position:absolute;"><span class="fa fa-plus"></span></a>
      <?php } ?>
      <h2 class="card-title text-center">Subjects</h2>
    </div> 
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>School Year</th>
          <th>Code</th>
          <th>Subject Name</th>
          <th style="width:150px">Action</th>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM users INNER JOIN teacher_infos ON users.id = teacher_infos.teacher_id INNER JOIN schoolyears ON users.id = schoolyears.id INNER JOIN subjects ON users.id = subjects.id WHERE users.id=$id";

          //use for MySQLi-OOP
          $query = $conn->query($sql);
          while($row = $query->fetch_assoc()){

          ?>
          <tr>
              <td><?php echo $row['school_year'] ?></td>
              <td><?php echo $row['code'] ?></td>
              <td><?php echo $row['sub_name'] ?></td>
              <td>
              <?php if($_SESSION['role_id']==1){ ?>
                <a href='#<?php echo $row['id'] ?>' class='btn btn-success btn-sm' data-toggle="modal" data-target="#subject"><i class="fa fa-pencil-alt"></i><span class='glyphicon glyphicon-edit'></span></a>
                <?php } if($_SESSION['role_id']==2){?>
                  <a onclick="window.open('reportcard.php?id=<?php echo $row['id'] ?>')" class='btn btn-info btn-sm'><i class="fa fa-print"></i><span class='glyphicon glyphicon-edit'></span></a>
                  <?php }if($_SESSION['role_id']==1){ ?>
                <a href='#delete_<?php echo $row['id'] ?>' class='btn btn-danger btn-sm' data-toggle='modal'><i class="fa fa-trash"></i><span class='glyphicon glyphicon-trash'></span></a>
                  <?php } ?>
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
    <?php include 'subject_modal.php';?> 
    <!-- <script src="javascript/student/index.js"></script> -->
</div>
<?php } ?>
<?php 
    include 'include/footer.php';
?>