<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header ">
                <h4>Student Profile</h4>
            </div>

            
                <div class="card-content " style="margin-left: 5%;">
                    <!-- <img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid"
                                        alt="singleminded"> -->
                    <div class="avatar avatar-xl me-3 ">
                        <?php
                        if ("type" == "student") {
                        ?>
                            <img src="dashboardTemplate/dist/assets/images/faces/1.jpg" alt="" srcset="">

                        <?php
                        } elseif ("type" == "teacher") {
                        ?>
                            <img src="dashboardTemplate/dist/assets/images/faces/2.jpg" alt="" srcset="">
                        <?php  } ?>
                        <!-- student -->
                        <img src="dashboardTemplate/dist/assets/images/faces/1.jpg" alt="" srcset="">
                        <!-- teacher -->
                        <!-- <img src="dashboardTemplate/dist/assets/images/faces/2.jpg" alt="" srcset=""> -->

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo "username"
                            ?>
                        </h5>

                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <?php
                    if ("type" == "student") {
                    ?>
                        <li class="list-group-item">Full Name:</li>
                        <li class="list-group-item">Date Of Birth: </li>
                        <li class="list-group-item">Grade:</li>
                        <li class="list-group-item">Subject:</li>
                    <?php
                    } elseif ("type" == "teacher") {
                    ?>
                        <li class="list-group-item">Full Name:</li>
                        <li class="list-group-item">Date Of Birth: </li>
                        <li class="list-group-item">Subject:</li>
                    <?php } ?>
                    <li class="list-group-item">Full Name:</li>
                    <li class="list-group-item">Date Of Birth: </li>
                    <li class="list-group-item">Grade:</li>
                    <li class="list-group-item">Subject:</li>
                </ul>
           
        </div>
    </div>
</div>