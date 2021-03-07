<?php include 'include/header.php';
?>
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="user_add.php" method="POST">
                                <input type="hidden" name="role_id" value="3">
                                <div class="form-group">
                                    <input type="text"name="name" id="name" class="form-control form-control-user" placeholder="FullName" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file"name="profile" id="pro" class="form-control form-control-user" placeholder="Profile" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" name="age" id="age" class="form-control form-control-user" placeholder="Age" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" id="name" class="form-control form-control-user" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" id="name" class="form-control form-control-user" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="name" class="form-control form-control-user" placeholder="Password" required>
                                </div>
                                <button type="submit" name="reg" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="loginform.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    include 'include/script.php';
 ?>