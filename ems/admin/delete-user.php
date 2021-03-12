<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<?php
session_start();
$host="localhost";
$username="root";
$pass="";
$db="ems";
$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
    die("Database connection error");
}
$user_id=$_GET['id'];

   $query="delete from `users` where `user_id`='$user_id'";
   $res=mysqli_query($conn,$query);
  if($res){
      $_SESSION['success']="Deletion successfull";
       header('Location:dashboard.php');
    }
    else{
       echo"Deletion Failed";
    }
?>