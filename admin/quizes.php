<!-- list quizes like users > Actions: view - edit - delete - student result -->


<?php
session_start();
?>

<div class="card">
    <div class="card-header">
        Quizes
        <span style="float: right;">
            <a href="<?php echo '?title=teacher/create_quiz'?>" class="btn-sm icon icon-left btn-success"><i data-feather="alert-circle" style="float: right;"></i>
                Create Quiz</a>
        </span>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    
                    while($x=mysqli_fetch_array($QuizData)) 
                    { 
                 ?> 
                <tr>
                    <td><?php echo $x['QuizName'] ?></td>
                    <td><?php echo $x['SubName'] ?></td>
                    <td>
                        <div class="avatar me-3">
                            <img src="dashboardTemplate/dist/assets/images/faces/1.jpg" alt="" srcset="">
                        </div><?php echo $quizTeacher['FName'].$quizTeacher['LName'] ?>
                    </td>
                    <td><?php echo $x['grade'] ?></td>

                    <td colspan="3">
                        <a href="<?php echo '?quizid='. $x['QuizID'].'&title=teacher/quiz_view'?>" class="btn-sm icon icon-left btn-primary" style="margin-right: 2%;"><i data-feather="edit"></i>
                            View</a>

                       

                        <a href="<?php echo '?email='. $x['Email'].'&title=teacher/quiz_delete'?>" class="btn-sm icon icon-left btn-danger" style="margin-right: 2%;"><i data-feather="alert-circle"></i>
                            Delete</a>
                    </td>
                </tr>
<?php } ?>
                
            </tbody>
        </table>
    </div>
</div>