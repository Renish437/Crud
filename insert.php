
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Insert</title>
</head>
<body>
    <h1>Student</h1>
    <form action="" method="POST">

    <table>
<tr>

<td>Roll no:</td>
<td><input type="text"name="srollno" required></td>
</tr>
<tr><td>Name:</td>
<td><input type="text"name="sname" required></td>
</tr>
<tr><td>Address:</td>
<td><input type="text"name="saddress" required></td>
</tr>
<tr><td>Course:</td>
<td><input type="text"name="scourse" required></td>
</tr>
<tr><td>
<td><input type="submit" value="Submit"name="submit"></td>
</tr>

    </table>


 
 

    <?php
include 'connection.php';

if(isset($_POST['submit'])){
    $rollno=$_POST['srollno'];
    $name=$_POST['sname'];
    $address=$_POST['saddress'];
    $course=$_POST['scourse'];

    $query = "INSERT INTO student VALUES($rollno,'$name','$address','$course')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "Inserted Successfully";
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








