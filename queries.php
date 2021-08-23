<?php
include "connection.php";
// //echo "queries";
// include "index.php";
    // -----------------------------------------------------------------------------------------------------------------------------------------------------

    // -----------------------------------------------------------------------------------------------------------------------------------------------------

// ADD USER QUERIES
if(isset($_POST['addUser'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dateOfBirth = $_POST['date'];
    $role = $_POST['role'];
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    
    if ($role == 'admin'){
        $UserData = mysqli_query($conn, "INSERT INTO `Admin`(`FName`, `LName`, `DateOfBirth`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$email')");
        //echo "INSERT INTO `Admin`(`FName`, `LName`, `DateOfBirth`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$email')";
    }elseif ($role == 'teacher') {
        $UserData = mysqli_query($conn, "INSERT INTO `Teacher`(`FName`, `LName`, `DateOfBirth`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$email')");
        //echo"INSERT INTO `Teacher`(`FName`, `LName`, `DateOfBirth`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$email')";
    }elseif ($role == 'student') {
        $UserData = mysqli_query($conn, "INSERT INTO `Student`(`FName`, `LName`, `DateOfBirth`, `grade`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$grade', '$email')");
        //echo "INSERT INTO `Student`(`FName`, `LName`, `DateOfBirth`, `grade`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$grade', '$email')";
    }
    $LoginTable = mysqli_query($conn, "INSERT INTO `Login`(`Email`, `Password`,`role`) VALUES ('$email','$password', '$role')");
    
 
}
    // -----------------------------------------------------------------------------------------------------------------------------------------------------
// Show All Users
$TeacherData = mysqli_query($conn, "SELECT * FROM Login INNER JOIN Teacher ON Login.Email = Teacher.Email " );
$StudentData = mysqli_query($conn, "SELECT * FROM Login INNER JOIN Student ON Login.Email = Student.Email " );
$AdminData = mysqli_query($conn, "SELECT * FROM Login INNER JOIN Admin ON Login.Email = Admin.Email " );


// -----------------------------------------------------------------------------------------------------------------------------------------------------

// Edit User Queries

$mail=$_GET['email'];
$role1= mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Login` WHERE `Email`='$mail'"));
$UserData = mysqli_fetch_array(mysqli_query($conn, (
    "SELECT `UserID`, `FName`,`LName`,`DateOfBirth`,null as `grade`,`Email`,null as `role` FROM `Admin` WHERE `Email`='$mail'
    UNION
    SELECT `UserID` ,`FName`,`LName`,`DateOfBirth`,null as `grade`,`Email`,null as `role` FROM `Teacher`WHERE `Email`='$mail'
    UNION
    SELECT `UserID`, `FName`,`LName`,`DateOfBirth`,`grade`,`Email`,null as `role` FROM `Student` WHERE `Email`='$mail'")));

if(isset($_POST['edit_user'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // $dateOfBirth = $_POST['date'];
    $role = $_POST['role'];
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    
    if ($role == 'admin'){
        $UserData = mysqli_query($conn, "UPDATE `Admin` SET `FName` = '$fname' , `LName` = '$lname', `Email` = '$email' WHERE Email='$mail' ");
        //echo "UPDATE `Admin` SET `FName` = '$fname' , `LName` = '$lname', `Email` = '$email' WHERE Email='$mail' ";
    }elseif ($role == 'teacher') {
        $UserData = mysqli_query($conn, "UPDATE `Teacher` SET `FName` = '$fname', `LName` = '$lname',  `Email` = '$email' WHERE Email='$mail'");
        //echo "UPDATE `Teacher` SET `FName` = '$fname', `LName` = '$lname',  `Email` = '$email' WHERE Email='$mail'";
    }elseif ($role == 'student') {
        $UserData = mysqli_query($conn, "UPDATE `Student`SET `FName` = '$fname', `LName` = '$lname',  `grade` = '$grade', `Email` = '$email') WHERE Email='$mail'");
        //echo "UPDATE `Student`SET `FName` = '$fname', `LName` = '$lname',  `grade` = '$grade', `Email` = '$email') WHERE Email='$mail'";
    }
    $LoginTable = mysqli_query($conn, "UPDATE `Login` SET `Email` =  '$email', `Password` = '$password' WHERE `Email` = '$mail' ");
   //echo "UPDATE `Login` SET `Email` =  '$email', `Password` = '$password' WHERE `Email` = '$mail' ";
//     $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
//   //echo "<script language='javascript' type='text/javascript'> Location.href='$url'</script>" ; 
}

// -----------------------------------------------------------------------------------------------------------------------------------------------------

// Delete User Queries
if(isset($_POST['delete_user'])){
    
     
    $delete = mysqli_query($conn , "DELETE FROM `Admin` WHERE `Email` = '$mail'");
    //echo "DELETE FROM `Admin` WHERE `Email` = '$mail'";

    $delete = mysqli_query($conn , "DELETE FROM `Teacher` WHERE `Email` = '$mail'");
    //echo "DELETE FROM `Teacher` WHERE `Email` = '$mail'";

    $delete = mysqli_query($conn , "DELETE FROM `Student` WHERE `Email` = '$mail'");
    //echo "DELETE FROM `Student` WHERE `Email` = '$mail'";

    $LoginTable = mysqli_query($conn, "DELETE FROM `Login` WHERE `Email` = '$mail' ");
    //echo "DELETE FROM `Admin` WHERE `Email` = '$mail'";
   

}
// -----------------------------------------------------------------------------------------------------------------------------------------------------

// Create Quiz
$i =0;
$Title = $_POST['title'];
$qestion = $_POST['questionBody'];
$rightAnswer = $_POST['Success'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];

$grade = $_POST['grade'];
$degree = $_POST['degree'];
$getGrade = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Subject`"));


if(isset($_POST['addQuiz'])){
    if(!empty($qestion)) {
        
        $insertQuiz= mysqli_query($conn,"INSERT INTO `Quiz`(`QuizName`, `SubID`) VALUES('$Title',$getGrade[SubID])");
        $quizID = mysqli_insert_id($conn);
// //echo "INSERT INTO `Quiz`(`QuizName`, `SubID`) VALUES('$Title',$getGrade[SubID])";
        
        $count = count ($answer);
        // foreach($questionAnswers as $q => $answers){
    for ($i = 0 ; $i<$count; $i++){
    $insertQuestion = mysqli_query($conn,
                "INSERT INTO `Question`(`QuizID`, `QuestionBody`,  `1st` ,`2nd`,`3rd`,`4th`) 
                VALUES
                ($quizID, '$qestion', '$answer1','$answer2','$answer3','$answer4')
                 ");
            }
            $model= mysqli_query($conn,"INSERT INTO `ModelAnswer`(`QuizID`, `QuestionBody`, `CorrectAns`, `Degree`) VALUES($quizID, '$qestion',$rightAnswer,'$degree')");
            // //echo "INSERT INTO `ModelAnswer`(`QuizID`, `QuestionBody`, `CorrectAns`, `Degree`) VALUES($quizID, '$qestion',$rightAnswer,'$degree')";
            // //echo $quizID;
        }
    
}


// -----------------------------------------------------------------------------------------------------------------------------------------------------
// List all quizes
$quizid=$_GET['quizid'];
$QuizData1 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Quiz` INNER JOIN `Subject` ON Quiz.SubID = Subject.SubID " ));
$QuizData = mysqli_query($conn, "SELECT * FROM `Quiz` INNER JOIN `Subject` ON Quiz.SubID = Subject.SubID " );

$quizTeacher = mysqli_fetch_array(mysqli_query($conn , "SELECT * FROM `Teacher` INNER JOIN `Subject` ON Teacher.UserID = Subject.UserID " ));
$quizQuestion = mysqli_query($conn , "Select * From `Question` WHERE `QuizID`= $quizid ");


// -----------------------------------------------------------------------------------------------------------------------------------------------------

if(isset($_POST['answer'])){
    $quizid= $_GET['quizid'];
    $student = $_GET['email'];
    $QuizData = mysqli_query($conn, "SELECT * FROM `Quiz` INNER JOIN `Subject` ON Quiz.SubID = Subject.SubID " );

$quizTeacher = mysqli_fetch_array(mysqli_query($conn , "SELECT * FROM `Teacher` INNER JOIN `Subject` ON Teacher.UserID = Subject.UserID " ));

  
$studentId = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `Student` WHERE  `Email` = '$student'"));
//echo "SELECT * FROM `Student` WHERE  `Email` = '$student'";

$QuestionId= mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Quiz` INNER JOIN `Question` WHERE Quiz.QuizID = Question.QuizID "));
$answer = $_POST['Success'];
$modelans = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ModelAnswer` INNER JOIN `Question` WHERE ModelAnswer.QuizID = Question.QuizID"));
if($answer == $modelans['CorrectAns'] ){
mysqli_query($conn, "INSERT INTO `Result`(`StudentID`, `QuizID`, `QuestionID`, `StudentAnswer`, `Score`) VALUES ($studentId[UserID] ,$quizid,$QuestionId[ID],'$answer','$modelans[degree]') ");
//echo 1 ;
}else{
    mysqli_query($conn, "INSERT INTO `Result`(`StudentID`, `QuizID`, `QuestionID`, `StudentAnswer`, `Score`) VALUES ($studentId[UserID] ,$quizid,$QuestionId[ID],'$answer',0) ");
//echo "INSERT INTO `Result`(`StudentID`, `QuizID`, `QuestionID`, `StudentAnswer`, `Score`) VALUES ($studentId[UserID] ,$quizid,$QuestionId[ID],'$answer',0)";
}
$score = mysqli_query($conn , "SELECT `Score` FROM `Result` WHERE `StudentID` = $studentId[UserID]");
$msg = "$studentId[FName]. $studentId[LName]. $score";
//echo $msg;
mail("$quizTeacher[email]","$QuizData[QuizName]",$msg);

}
?>
