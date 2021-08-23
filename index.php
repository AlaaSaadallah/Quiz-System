<?php
include "queries.php";
include "session.php";
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include "head.php";
?>
</head>

<body>
    <div id="app">
        <!-- sidebar start -->
        <div id="sidebar" class="active">
           <?php
           if($_SESSION['role'] == "admin"){
               include "admin/sidebar.php";
           }elseif($_SESSION['role'] == "student"){
               include "student/sidebar.php";
           }elseif($_SESSION['role'] == "teacher"){
               include "teacher/sidebar.php";
           }
      
           ?>
        </div>
     
       
        <div id="main" name="main">
     
            <div class="page-content" id="page-content">
                <section class="row">
                    <div class="col-12" id="page-content">
                    

                        <?php
                      
                        include "$_GET[title].php";
                        
                       
                        ?>
                 
             </section>
         </div>
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