<!-- form to write the question and the choices and detrmine the correct answer -->
<?php
session_start();
?>
<link rel="stylesheet" href="dashboardTemplate/dist/assets/vendors/choices.js/choices.min.css" />
<h1>View Quiz</h1>

    <div class="card">
        <div class="card-body">
            <div class="form-group row align-items-center">
                <div class="col-md-6">
               
                    <div class="col-lg-2 col-3">
                        <label class="col-form-label">Quiz Name :</label>
                    </div>
                    <div class="col-lg-10 col-9">
                        <input type="text" id="first-name" class="form-control" name="title" value="<?php echo $QuizData1['QuizName'];?>" readonly>
                    </div>
                </div>

                           </div>
            <?php
                    
                    while($x=mysqli_fetch_array($quizQuestion)) 
                    { 
                 ?> 
                 <form method="post" >
            <div class="form-group with-title mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="questionBody" readonly><?php echo $x['QuestionBody'] ?></textarea>
                <label>Question</label>
            </div>
           

            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="1" aria-label="Radio button for following text input" readonly>
                    </div>
                </div>
                <input type="text" class="form-control" name="answer1"aria-label="Text input with radio button" value="<?php echo $x['1st'] ?>" >
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="2" aria-label="Radio button for following text input" readonly>
                    </div>
                </div>
                <input type="text" class="form-control" name="answer2" aria-label="Text input with radio button" value="<?php echo $x['2nd'] ?>" >
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="3" aria-label="Radio button for following text input" readonly>
                    </div>
                </div>
                <input type="text" class="form-control" name="answer3" aria-label="Text input with radio button" value="<?php echo $x['3rd'] ?>" >
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="4" aria-label="Radio button for following text input" readonly>
                    </div>
                </div>
                <input type="text" class="form-control" name="answer4" aria-label="Text input with radio button" value="<?php echo $x['4th'] ?>" >
            </div>
            <br>
            <button type="submit" class="btn btn-primary me-1 mb-1" name="answer">Submit</button>
                    </form>
            <?php  } ?>
        </div>
    </div>

    </div>


<script src="dashboardTemplate/dist/assets/vendors/choices.js/choices.min.js"></script>
<script src="dashboardTemplate/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="dashboardTemplate/dist/assets/js/bootstrap.bundle.min.js"></script>


<script src="dashboardTemplate/dist/assets/js/main.js"></script>