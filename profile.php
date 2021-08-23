<?php
session_start();
?>
<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header ">
                
            </div>

            
                <div class="card-content " style="margin-left: 5%;">
                  
                    <div class="avatar avatar-xl me-3 ">
                        <?php
                        if ("type" == "student") {
                        ?>
                            <img src="dashboardTemplate/dist/assets/images/faces/1.jpg" alt="" srcset="">
                            <h4>Student Profile</h4>

                        <?php
                        } elseif ("type" == "teacher") {
                        ?>
                            <img src="dashboardTemplate/dist/assets/images/faces/2.jpg" alt="" srcset="">
                            <h4>Teacher Profile</h4>
                        <?php  } ?>
                        <!-- student -->
                        <img src="dashboardTemplate/dist/assets/images/faces/1.jpg" alt="" srcset="">
                        <!-- teacher -->
                   

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $UserData['FName'] ." " .$UserData['LName']
                            ?>
                        </h5>

                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    
                        <li class="list-group-item">First Name: 
                            <span style="color: black;"> <?php
                            echo $UserData['FName'] 
                            ?>
                            </span>    
                        </li>

                        <li class="list-group-item">Last Name: 
                            <span style="color: black;"> <?php
                            echo $UserData['LName']
                            ?>
                            </span>    
                        </li>
                        <li class="list-group-item">Date Of Birth: 
                        <span style="color: black;">
                        <?php
                            echo $UserData['DateOfBirth'] 
                            ?>
                        </span>
                        </li>
                        <li class="list-group-item">Email: 
                        <span style="color: black;">
                        <?php
                            echo $UserData['Email'] 
                            ?>
                        </span>
                        </li>
                   
                </ul>
           
        </div>
    </div>
</div>