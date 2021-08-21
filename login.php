<?php
include "queries.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

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
                    <!-- <div class="auth-logo">
                        <a href="index.html"><img src="dashboardTemplate/dist/assets/images/logo/logo.png" alt="Logo"></a>
                    </div> -->
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="" method="post">
                        
                   

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
                        <!-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                 Keep me logged in
                            </label>
                        </div> -->
                        <div class="input-group mb-3 form-group">
                                                    <label class="input-group-text btn btn-primary" for="inputGroupSelect01">Role</label>
                                                    <select class="form-select" id="inputGroupSelect01" style="background-color: #e8f0fe;">
                                                        <option selected="">Choose...</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Teacher</option>
                                                        <option value="3">Student</option>
                                                    </select>
                                                </div>
                       
                    <!-- <div class="btn-group dropdown me-1 mb-1 col-12" >
                                            <button type="button" class="btn btn-primary">Role</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                <span class="sr-only">SELECT</span>
                                            </button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" href="#">Admin</a>
                                                <a class="dropdown-item active" href="#">Student</a>
                                                <a class="dropdown-item" href="#">Teacher</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div> -->
                                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit" name="login">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <div style="float: middle;">

                        <img src="pngegg.png">
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
    </div>
</body>

</html>