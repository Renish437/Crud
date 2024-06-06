<?php
include "connection.php";

// $rollno=$_GET['rollno'];
// echo $rollno;

$query="DELETE FROM student WHERE rollno='$_GET[rollno]' ";
$result=mysqli_query($con,$query);

if($result){
    // echo "Deleted Suceessfully...";
    header('location:display.php');
}

else{
   die(mysqli_error($result));
}

?>