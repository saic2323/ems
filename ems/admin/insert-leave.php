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
// insert query for register page
if(isset($_REQUEST['validfrm']))
{
  $validfrm   = $_POST['validfrm'];
  $validto   = $_POST['validto'];
  $eleave  = $_POST['eleave'];
  $mleave  = $_POST['mleave'];
  $cleave  = $_POST['cleave'];
  $assign_by   = $_POST['assign_by'];

  $emplist  = $_POST['emp'];
  //  print_r($emplist);
foreach ($emplist as $emp) {

    $query = "INSERT INTO `assign_leave` (`id`,`v_from`,`v_to`,`e_leave`,`m_leave`,`c_leave`,`assign_by`,`assign_to`) VALUE ('','$validfrm','$validto','$eleave','$mleave','$cleave','$assign_by','$emp')";
    $res = mysqli_query($conn, $query);

}
    if ($res) {
        $_SESSION['success'] = "Leave Assigned successfull";
        header('Location:assign-leave.php');
    } else {
        echo "Leave Assigning Failed";
    }
}

?>
