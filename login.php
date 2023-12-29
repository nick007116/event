<?php
if(isset($_POST['name']))
{

$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("failed to connect".mysqli_connect_error());
}
//echo "connedted";

$name = $_POST['name'];
$gender = $_POST['gender'];
$mobile_no = $_POST['mobile_no'];
$dob = $_POST['dob'];
$sql = "INSERT INTO `logintest`.`details` (`name`, `mobile_no`, `gender`, `dob`) VALUES ('$name', '$mobile_no', '$gender', '$dob');";


if($con->query($sql)==true)
{
    header("location: /projects/login.html");
    exit;

}
else{
    echo "error:$sql <br> $con->error";
}
$con->close();
}
?>


