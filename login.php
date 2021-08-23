<?php

include "session.php";
session_start();//session starts here  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="dashboardTemplate/dist/assets/css/pages/auth.css">
    <?php
    include "head.php";
    ?>
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>


                    <form method="post" action="">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <div class="input-group mb-3 form-group">
                            <label class="input-group-text btn btn-primary" for="inputGroupSelect01">Role</label>
                            <select class="form-select" id="inputGroupSelect01" name="role"  style="background-color: #e8f0fe;" onchange="myChangeFunction()">
                                <option selected disabled>Select Your Role</option>
                                <option value="admin">Admin</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                        
                       
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5"   type="submit" name="login">Log in</button>
                    </form>
                 
                    
                 
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" >
                    <div style="float: middle;">

                        <img src="logo.png" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>

<script src="dashboardTemplate/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="dashboardTemplate/dist/assets/js/bootstrap.bundle.min.js"></script>

    <script src="dashboardTemplate/dist/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="dashboardTemplate/dist/assets/js/pages/dashboard.js"></script>

    <script src="dashboardTemplate/dist/assets/js/main.js"></script>

    