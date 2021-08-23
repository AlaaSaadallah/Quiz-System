<?php 
// session_start();
?>
<div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                        <img src="logo.png" alt="Logo"  style="width:250px;height:auto;">
                        </div>
                       
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="<?php echo '?title=profile';?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="<?php echo '?title=student/take_quiz';?>" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Take Quiz</span>
                            </a>
                        
                        </li>

                      

                       
                        <li class="sidebar-item">
                        <a href="logout.php" class='sidebar-link' tite="Logout"><i class="bi bi-x bi-middle"></i><span>Logout</span></a> 
                        </li>
            </div>