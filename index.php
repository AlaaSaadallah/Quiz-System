<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include "head.php";
include "queries.php";
?>
</head>

<body>
    <div id="app">
        <!-- sidebar start -->
        <div id="sidebar" class="active">
           <?php
        //    if("type" == "admin"){
        //        include "admin/sidebar.php";
        //    }elseif("type" == "student"){
        //        include "student/sidebar.php";
        //    }elseif("type" == "teacher"){
        //        include "teacher/sidebar.php";
        //    }
           include "admin/sidebar.php";
           ?>
        </div>
        <!-- end of sidebar -->
       
        <div id="main" name="main">
     
            <div class="page-content" id="page-content">
                <section class="row">
                    <div class="col-12" id="page-content">
                        <?php
                            // include "'$_GET[hidden]'.php";
                            // include "student/taken_quiz.php";
                            // include "profile.php";
                            // include "student/quiz.php";
                        // include "admin/add_user.php";
                        // include "admin/user_edit.php";
                        include "$_GET[title].php";
                        // echo "$_GET[title].php";
                        // $mail = "$_GET[email]";
                        // include "teacher/create_quiz.php";
                        ?>
                     <!-- <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script>
      $("#page-content").html("<?php  //include "student/quiz.php"; ?>");
    </script> -->
                    </div>
                    <!-- <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div> -->
                </section>
            </div>
        </div>
            <footer >
                <div class="footer clearfix mb-0  text-muted" style="margin-bottom: 0%;">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /var/www/html/quizSystem/dashboardTemplate/dist/assets -->
    </div>
    <script src="dashboardTemplate/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="dashboardTemplate/dist/assets/js/bootstrap.bundle.min.js"></script>

    <script src="dashboardTemplate/dist/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="dashboardTemplate/dist/assets/js/pages/dashboard.js"></script>

    <script src="dashboardTemplate/dist/assets/js/main.js"></script>

</body>

</html>