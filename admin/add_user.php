<link rel="stylesheet" href="dashboardTemplate/dist/assets/vendors/sweetalert2/sweetalert2.min.css">

<?php
include "./queries.php";
?>
<section id="multiple-column-form">
<h1>Add User</h1>
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <dusersiv class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="./index.php">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">First Name</label>
                                                        <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Last Name</label>
                                                        <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Date Of Birth</label>
                                                        <input type="date" id="city-column" class="form-control" name="date">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Role</label>
                                                        <select class="form-select" id="RoleSelect" name="role">
                                                            <option value="" disabled selected>Select Role</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Teacher</option>
                                                        <option value="3">Student</option>
                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Subject</label>
                                                        <select class="form-select" id="SubjectSelect" name="subject">
                                                        <option value="" disabled selected>Select Subject</option>
                                                        <option value="English">English</option>
                                                        <option value="Math">Math</option>
                                                        <option value="Arabic">Arabic</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Grade</label>
                                                        <select class="form-select" id="GradeSelect" name="grade">
                                                        <option value="" disabled selected>Select Grade</option>
                                                        <option value="g1">Grade 1</option>
                                                        <option value="g2">Grade 2</option>
                                                        <option value="g3">Grade 3</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Email</label>
                                                        <input type="email" id="email-id-column" class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Password</label>
                                                        <input type="password" id="company-column" class="form-control" name="password" placeholder="password">
                                                    </div>
                                                </div>
                                             
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="addUser">Submit</button>
                                                     <!-- <button id="success"
                                                class="btn btn-outline-success btn-lg btn-block">Success</button> -->
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
?>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

            <!-- <script src="dashboardTemplate/dist/assets/js/extensions/sweetalert2.js"></script>
    <script src="dashboardTemplate/dist/assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="dashboardTemplate/dist/assets/js/main.js" aria-hidden="true"></script>
    <script src="dashboardTemplate/dist/assets/js/bootstrap.bundle.min.js" aria-hidden="true"></script> -->
           <script src="dashboardTemplate/dist/assets/js/extensions/toastify.js"></script>
    <script src="dashboardTemplate/dist/assets/vendors/toastify/toastify.js"></script>
    <!-- <script src="dashboardTemplate/dist/assets/js/main.js" aria-hidden="true"></script> -->
    <!-- <script src="dashboardTemplate/dist/assets/js/bootstrap.bundle.min.js" aria-hidden="true"></script> -->