<?php
include "connection.php";
echo "queries.php";
// include "index.php";
    // -----------------------------------------------------------------------------------------------------------------------------------------------------

    // CHECK LOGIN 
    if(isset($_POST['login'])){
       
        if ((empty($_POST ['email'])) ){
            echo "please enter your email";
        }else if((empty($_POST ['password'])) ){
            echo "please enter your password";
        }elseif((empty($_POST ['role']))){
            echo "please enter your role";
        }else{
            $email = $_POST ['email'];
            $password = $_POST ['password'];
            $role = $_POST ['role'];
        $check = mysqli_query($conn, "SELECT * FROM `Login` WHERE `Email`='$email' AND `Password`='$password' AND `role`='$role'");
        if (mysqli_num_rows($check)>0){
            // echo 'success';
        }else{
            // echo "login faild <br> "."SELECT * FROM `Login` WHERE `Email`='$email' AND `Password`='$password' AND `role`='$role'";
        }
    }
}
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
        echo "INSERT INTO `Admin`(`FName`, `LName`, `DateOfBirth`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$email')";
    }elseif ($role == 'teacher') {
        $UserData = mysqli_query($conn, "INSERT INTO `Teacher`(`FName`, `LName`, `DateOfBirth`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$email')");
        echo"INSERT INTO `Teacher`(`FName`, `LName`, `DateOfBirth`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$email')";
    }elseif ($role == 'student') {
        $UserData = mysqli_query($conn, "INSERT INTO `Student`(`FName`, `LName`, `DateOfBirth`, `grade`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$grade', '$email')");
        echo "INSERT INTO `Student`(`FName`, `LName`, `DateOfBirth`, `grade`, `Email`) VALUES ('$fname', '$lname', '$dateOfBirth', '$grade', '$email')";
    }
    $LoginTable = mysqli_query($conn, "INSERT INTO `Login`(`Email`, `Password`,`role`) VALUES ('$email','$password', '$role')");
    
    //   if ($UserData ){
        //   echo "INSERT INTO `Login`(`Email`, `Password`,`role`) VALUES ('$email','$password', '$role')";
        // $mysqli->commit();
        // echo "success";
    // //     echo '<div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;"><div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error" style="display: none;"></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
    // //     <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
    // //     <div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
    // //     <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
    // //   </div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: flex;">Success</h2><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button></div><div class="swal2-content"><div id="swal2-content" class="swal2-html-container" style="display: none;"></div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div><div class="swal2-actions"><div class="swal2-loader"></div><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block;">OK</button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none;">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>';
    }   
    // else { 
        // $mysqli_rollback() ;
        // echo "faild <br>";
    //     echo "INSERT INTO `User`( `Fname`, `Lname`, `DateOfBirth`, `Role`, `Subject`, `Grade`) VALUES ('$fname','$lname','$dateOfBirth',$role,'$subject','$grade')" ;
    //     echo "<br>". "INSERT INTO `Login`(`Email`, `Password`) VALUES ('$email','$password')" ;
    
// }
// }
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
    $dateOfBirth = $_POST['date'];
    $role = $_POST['role'];
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    
    if ($role == 'admin'){
        $UserData = mysqli_query($conn, "UPDATE `Admin` SET `FName` = '$fname' , `LName` = '$lname', `Email` = '$email' WHERE Email='$mail' ");
    }elseif ($role == 'teacher') {
        $UserData = mysqli_query($conn, "UPDATE `Teacher` SET `FName` = '$fname', `LName` = '$lname',  `Email` = '$email' WHERE Email='$mail'");
    }elseif ($role == 'student') {
        $UserData = mysqli_query($conn, "UPDATE `Student`SET `FName` = '$fname', `LName` = '$lname',  `grade` = '$grade', `Email` = '$email') WHERE Email='$mail'");
    }
    $LoginTable = mysqli_query($conn, "UPDATE `Login` SET `Email` =  '$email', `Password` = '$password' WHERE `Email` = '$mail' ");
}

// -----------------------------------------------------------------------------------------------------------------------------------------------------
echo $_POST['role'];
// Delete User Queries
if(isset($_POST['delete_user'])){
    
     
    $delete = mysqli_query($conn , "DELETE FROM `Admin` WHERE `Email` = '$mail'");
    echo "DELETE FROM `Admin` WHERE `Email` = '$mail'";

    $delete = mysqli_query($conn , "DELETE FROM `Teacher` WHERE `Email` = '$mail'");
    echo "DELETE FROM `Teacher` WHERE `Email` = '$mail'";

    $delete = mysqli_query($conn , "DELETE FROM `Student` WHERE `Email` = '$mail'");
    echo "DELETE FROM `Student` WHERE `Email` = '$mail'";

    $LoginTable = mysqli_query($conn, "DELETE FROM `Login` WHERE `Email` = '$mail' ");
    echo "DELETE FROM `Admin` WHERE `Email` = '$mail'";
   

}


?>
