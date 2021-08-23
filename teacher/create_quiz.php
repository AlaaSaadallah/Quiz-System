<!-- form to write the question and the choices and detrmine the correct answer -->
<?php 
session_start();
?>
<link rel="stylesheet" href="dashboardTemplate/dist/assets/vendors/choices.js/choices.min.css" />
<h1>Create Quiz</h1>
<form method="post">
    <div class="card">
        <div class="card-body">
            <div class="form-group row align-items-center">
                <div class="col-md-6">
                    <div class="col-lg-2 col-3">
                        <label class="col-form-label">Quiz Name :</label>
                    </div>
                    <div class="col-lg-10 col-9">
                        <input type="text" id="first-name" class="form-control" name="title" placeholder="Quiz Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- <div class="form-group row align-items-center"> -->
                    <div class="col-lg-2 col-3">
                        <label class="col-form-label">Grade:</label>
                    </div>
                    <div class="col-lg-10 col-9">
                        <div class="form-group">
                            <select class="choices form-select multiple-remove" name="grade" multiple="multiple">
                                <optgroup label="Figures">
                                    <option value="<?php echo $getGrade['grade'] ;?>"><?php echo $getGrade['grade'];?></option>
                              
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group with-title mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="questionBody"></textarea>
                <label>Question</label>
            </div>

            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="1" aria-label="Radio button for following text input">
                    </div>
                </div>
                <input type="text" class="form-control" name="answer1"aria-label="Text input with radio button">
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="2" aria-label="Radio button for following text input">
                    </div>
                </div>
                <input type="text" class="form-control" name="answer2" aria-label="Text input with radio button">
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="3" aria-label="Radio button for following text input">
                    </div>
                </div>
                <input type="text" class="form-control" name="answer3" aria-label="Text input with radio button">
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">
                    <div class="form-check form-check-success">
                        <input class="form-check-input" name="Success" id="Success" type="radio" value="4" aria-label="Radio button for following text input">
                    </div>
                </div>
                <input type="text" class="form-control" name="answer4" aria-label="Text input with radio button">
            </div>
            <br>
            <div class="col-sm-4 mb-1">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Degree</span>
                    <input type="text" class="form-control" name="degree" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>
    </div>

    </div>

    <div id="newRow">

    </div>
    <!-- <button id="addQuestion" type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Question</button> -->
    <button type="submit" class="btn btn-primary me-1 mb-1" onclick="submitForms()" name="addQuiz">Submit</button>
    </div>
    </div>
</form>
<script type="text/javascript">
    // add row
//     $("#addQuestion").click(function() {

//         var html = '';
//         html+= '<form method="post">'
//         html += ' <div class="card-body">';
//         html += '<div class="form-group with-title mb-3" >';
//         html += '<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="questionBody"></textarea>';
//         html += '<label>Question</label>';
//         html += '</div>';
//         html += '<div class="input-group">';
//         html += '<div class="input-group-text">';
//         html += '<div class="form-check form-check-success">';
//         html += '<input class="form-check-input" name="Success" id="Success" type="radio" value="1" aria-label="Radio button for following text input">';
//         html += '</div>';
//         html += '</div>';
//         html += '<input type="text" class="form-control" name="answer[]"  value = "" aria-label="Text input with radio button">';
//         html += '</div>';
//         html += '<br>';
//         html += '<div class="input-group">';
//         html += '<div class="input-group-text">';
//         html += '<div class="form-check form-check-success">';
//         html += '<input class="form-check-input" name="Success" id="Success" type="radio" value="2" aria-label="Radio button for following text input">';
//         html += '</div>';
//         html += '</div>';
//         html += '<input type="text" class="form-control" name="answer[]"  value = "" aria-label="Text input with radio button">';
//         html += '</div>';
//         html += '<br>';
//         html += '<div class="input-group">';
//         html += '<div class="input-group-text">';
//         html += '<div class="form-check form-check-success">'
//         html += '<input class="form-check-input" name="Success" id="Success" type="radio" value="3" aria-label="Radio button for following text input">';
//         html += '</div>';
//         html += '</div>';
//         html += '<input type="text" class="form-control" name="answer[]"  value = "" aria-label="Text input with radio button">';
//         html += '</div>';
//         html += '<br>';
//         html += '<div class="input-group">';
//         html += '<div class="input-group-text">';
//         html += '<div class="form-check form-check-success">';
//         html += '<input class="form-check-input" name="Success" id="Success" type="radio" value="4" aria-label="Radio button for following text input">';
//         html += '</div>';
//         html += '</div>';
//         html += '<input type="text" class="form-control" name="answer[]"  value = "" aria-label="Text input with radio button">';
//         html += '</div>';
//         html += '<br>';
//         html += '<div class="col-sm-4 mb-1">';
//         html += '<div class="input-group input-group-sm mb-3">';
//         html += '<span class="input-group-text" id="inputGroup-sizing-sm">Degree</span>';
//         html += '<input type="text" class="form-control" name="degree" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">';
//         html += '</div>';
//         html += '</div>';
//         html += '<div class="input-group-append">';
//         // html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
//         html += '</div>';
//         // html += '<input type="hidden" value="Click Me!" onclick="submitForms()" name="addQuiz"/>';
//         html += '</div>';
//         html += '</div>';
//         html += '</form>'
//         // html += '<div class="input-group mb-3">';
//         // html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
//         // html += '<div class="input-group-append">';
//         // html += '<button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';
//         // html += '</div>';
//         // html += '</div>';

//         $('#newRow').append(html);
//     });

//     // remove row
//     $(document).on('click', '#removeRow', function() {
//         $(this).closest('#inputFormRow').remove();
//         // add new row
//         $(document).on('click', '#addRow1', function() {
//             $(this).append(html);
//         });
//     });

//    var submitForms = function(){
//     document.getElementsByTagName("form").submit();
//    }
</script>

<script src="dashboardTemplate/dist/assets/vendors/choices.js/choices.min.js"></script>
<script src="dashboardTemplate/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="dashboardTemplate/dist/assets/js/bootstrap.bundle.min.js"></script>


<script src="dashboardTemplate/dist/assets/js/main.js"></script>