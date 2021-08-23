<!-- list quizes like users > Actions: view - edit - delete - student result -->


<?php
session_start();
?>

<div class="card">
    <div class="card-header">
        Quizes
        
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Subject</th>
                    
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
                  

                    <td colspan="3">
                        <a href="<?php echo '?quizid='. $x['QuizID'].'&title=student/quiz&email='.$_SESSION['login_user'];?>" class="btn-sm icon icon-left btn-primary" style="margin-right: 2%;"><i data-feather="edit"></i>
                            Answer Quiz</a>

                       
                    </td>
                </tr>
<?php } ?>
                
            </tbody>
        </table>
    </div>
</div>