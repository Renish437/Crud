<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<h1>Edit Student</h1>

<?php
include "connection.php";
$rollno=$_GET['rollno'];
// echo $rollno;

$query="SELECT * FROM student WHERE rollno= $rollno ";
$result= mysqli_query($con, $query);
$row=mysqli_fetch_assoc($result);






?>
    <form action="" method="POST">

    <table>
<tr>

<td>Roll no:</td>
<td><input type="text"name="srollno" value="<?php echo$row['rollno']?>"  required></td>
</tr>
<tr><td>Name:</td>
<td><input type="text"name="sname" value="<?php echo $row['name'] ?>" required></td>
</tr>
<tr><td>Address:</td>
<td><input type="text"name="saddress"value="<?php echo $row['address'] ?>" required></td>
</tr>
<tr><td>Course:</td>
<td><input type="text"name="scourse" value="<?php echo $row['course'] ?>" required></td>
</tr>
<tr><td>
<td><input type="submit" value="Update"name="submit"></td>
</tr>

    </table>

    <?php
    if(isset($_POST['submit'])){
        $rollno=$_POST['srollno'];
        $name=$_POST['sname'];
        $address=$_POST['saddress'];
        $course=$_POST['scourse'];

        $query="UPDATE student SET name='$name',address='$address',course='$course' WHERE rollno= $rollno ";
        $result=mysqli_query($con,$query);
        if($result){
            echo "Updated Sucessfully!";
            header('location:display.php');
        }
        else{
            die(mysqli_error($result));
        }

    }
    
    
    
    
    ?>


 
 

    

    </form>
</body>
</html>