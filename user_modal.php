<!-- add user -->
<div class="modal fade" id="usermodal" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <?php if($_SESSION['url']=="student.php"){ ?>
                <h4 id="modal-title"> Add Student </h4>
            <?php }else if($_SESSION['url']=="teacher.php"){?>
                <h4 id="modal-title"> Add Teacher </h4>
            <?php } ?>
            </div>
            <div class="modal-body">
                <form action="user_add.php" method="POST" class="form-horizontal">
                <?php if($_SESSION['url']=="student.php"){ ?>
                    <input type="hidden" name="role_id" value="3">
                <?php }else if($_SESSION['url']=="teacher.php"){?>
                    <input type="hidden" name="role_id" value="2">
                <?php } ?>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Profile</span></div>
                        <img src="" alt="">
                        <input type="file"name="profile" id="pro" class="form-control" placeholder="Profile" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Fullname</span></div>
                        <input type="text"name="name" id="name" class="form-control" placeholder="FullName" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Age</span></div>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Rate" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Address</span></div>
                        <input type="text" name="address" id="address" class="form-control" placeholder="User Profile" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Username</span></div>
                        <input type="text"name="username" id="username" class="form-control" placeholder="description" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Password</span></div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="description" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-control" name="engrave" data-id=0>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- edit user -->
<div class="modal fade" id="edit" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <?php if($_SESSION['url']=="student.php"){ ?>
                <h4 id="modal-title"> Update Student </h4>
            <?php }else if($_SESSION['url']=="teacher.php"){?>
                <h4 id="modal-title"> Update Teacher </h4>
            <?php } ?>
            </div>
            <div class="modal-body">
                <form action="user_add.php" method="POST" class="form-horizontal">
                <?php if($_SESSION['url']=="student.php"){ ?>
                    <input type="hidden" name="role_id" value="3">
                <?php }else if($_SESSION['url']=="teacher.php"){?>
                    <input type="hidden" name="role_id" value="2">
                <?php } ?>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Profile</span></div>
                        <img src="" alt="">
                        <input type="file"name="profile" id="pro" class="form-control" placeholder="Profile" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Fullname</span></div>
                        <input type="text"name="name" id="name" class="form-control" placeholder="FullName" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Age</span></div>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Rate" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Address</span></div>
                        <input type="text" name="address" id="address" class="form-control" placeholder="User Profile" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Username</span></div>
                        <input type="text"name="username" id="username" class="form-control" placeholder="description" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Password</span></div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="description" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-control" name="engrave" data-id=0>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>