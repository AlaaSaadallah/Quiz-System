<?php
// include "login.php";
//echo "session";
include("connection.php");

if (isset($_POST['login']))
{     
 session_start();
 $email=$_POST['email'];
 $password=$_POST['password'];
 $role = $_POST['role'];
 $query = mysqli_query($conn,"SELECT * FROM Login  WHERE `Email`='$email' and `Password`='$password' and `role`= '$role'");
$count = mysqli_num_rows($query);  
//echo $count;
 if ($count == 1)
 {

     echo "<script language='javascript' type='text/javascript'> location.href='index.php?title=profile' </script>";   
     $_SESSION['login_user']=$email; 
   
     $_SESSION['role']= $role;
    }
    else
    {
       // echo  "faild";
      
       echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
 }

 if (isset($_POST['logout']))
{  
    session_start();
    session_destroy();  
   // echo "logout";
    echo "<script language='javascript' type='text/javascript'> Location.href='login.php'</script>";
}
?>