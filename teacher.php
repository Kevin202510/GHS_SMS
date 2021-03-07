<?php 
    include 'include/header.php';
    include 'include/navigation.php';
?>
<div class="card">
      <div class="card-header with-border">
        <a href="#" data-toggle="modal" data-target="#usermodal" class="btn btn-success mb-2" style="position:absolute;"><span class="fa fa-plus"></span></a>
      <h2 class="card-title text-center">Teachers</h2>
    </div> 
    <div class="card-body">
      <table class="table table-hover" id="tab">
        <thead>
          <th>#</th>
          <th>Profile</th>
          <th>Name</th>
          <th>Age</th>
          <th>Adress</th>
          <th>Username</th>
          <th style="width:120px">Action</th>
        </thead>
        <tbody>
        <?php 
        include_once('include/connection.php');
          $sql = "SELECT * FROM `users` WHERE role_id=2";

          //use for MySQLi-OOP
          $query = $conn->query($sql);
          while($row = $query->fetch_assoc()){

          ?>
          <tr>
              <td><?php echo $row['user_id']; ?></td>
              <td><img class="im" src="images/<?php echo $row['profile'] ?>"></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['age'] ?></td>
              <td><?php echo $row['address'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td>
              <a href='#<?php echo $row['id'] ?>' class='btn btn-success btn-sm' data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-alt"></i><span class='glyphicon glyphicon-edit'></span></a>
                <a href='#delete_<?php echo $row['id'] ?>' class='btn btn-danger btn-sm' data-toggle='modal'><i class="fa fa-trash"></i><span class='glyphicon glyphicon-trash'></span></a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
</div>
<?php include 'include/footer.php';
      include 'include/script.php';
      include 'user_modal.php';
?>
<script src="javascript/teacher/index.js"></script>