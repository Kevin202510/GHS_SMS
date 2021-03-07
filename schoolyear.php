<?php
include 'include/header.php';
include 'include/navigation.php';
include 'include/script.php';
$name=$_SESSION['name'];
if($_SESSION['role_id']==1){
?>
<div class="card">
      <div class="card-header with-border">
        <a href="#" data-toggle="modal" data-target="#schoolyear" class="btn btn-success mb-2" style="position:absolute;"><span class="fa fa-plus"></span></a>
      <h2 class="card-title text-center">School Year</h2>
    </div> 
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>#</th>
          <th>School Year</th>
          <th>Batch Name</th>
          <th style="width:150px">Action</th>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM `schoolyears`";

          //use for MySQLi-OOP
          $query = $conn->query($sql);
          while($row = $query->fetch_assoc()){

          ?>
          <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['school_year'] ?></td>
              <td><?php echo $row['batch_name'] ?></td>
              <td>
                <a href='#<?php echo $row['id'] ?>' class='btn btn-success btn-sm' data-toggle="modal" data-target="#teacher"><i class="fa fa-pencil-alt"></i><span class='glyphicon glyphicon-edit'></span></a>
                <?php if($_SESSION['role_id']==2){?>
                  <a onclick="window.open('reportcard.php?id=<?php echo $row['id'] ?>')" class='btn btn-info btn-sm'><i class="fa fa-print"></i><span class='glyphicon glyphicon-edit'></span></a>
                  <?php } ?>
                <a href='#delete_<?php echo $row['id'] ?>' class='btn btn-danger btn-sm' data-toggle='modal'><i class="fa fa-trash"></i><span class='glyphicon glyphicon-trash'></span></a>
              </td>
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