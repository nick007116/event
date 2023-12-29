<?php

$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("failed to connect".mysqli_connect_error());
}
echo "connedted";
?>