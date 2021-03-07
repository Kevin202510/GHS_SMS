<?php 
    include 'include/header.php';
    include 'include/navigation.php';
    include 'include/script.php';
    $id=$_SESSION['id'];
?>
<div class="card">
      <div class="card-header with-border">
        <a href="#" data-toggle="modal" data-target="#usermodal" class="btn btn-success mb-2" style="position:absolute;"><span class="fa fa-plus"></span></a>
      <h2 class="card-title text-center">Students</h2>
    </div> 
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>#</th>
          <th>Year Level</th>
          <th>Profile</th>
          <th>Name</th>
          <th>Age</th>
          <th>Adress</th>
          <th>Username</th>
          <th style="width:150px">Action</th>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM users INNER JOIN year_levels ON users.yearlevel_id = year_levels.id WHERE users.role_id=3";

          //use for MySQLi-OOP
          $query = $conn->query($sql);
          while($row = $query->fetch_assoc()){

          ?>
          <tr>
              <td><?php echo $row['user_id']; ?></td>
              <td><?php echo $row['level'] ?></td>
              <td><img class="im" src="images/<?php echo $row['profile'] ?>"></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['age'] ?></td>
              <td><?php echo $row['address'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td>
                <a href='#<?php echo $row['id'] ?>' class='btn btn-success btn-sm' data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-alt"></i><span class='glyphicon glyphicon-edit'></span></a>
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
    <?php include 'user_modal.php';?> 
    <!-- <script src="javascript/student/index.js"></script> -->
</div>
<?php include 'include/footer.php';?>