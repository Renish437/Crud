<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Display</title>
</head>
<body>
    <h1>Lisit of Students</h1>
  <a href="insert.php"><button>Add+</button></a>  <br><br>

    <table border="1" cellspacing="0">

<tr>
    <th>Rollno</th>
    <th>Name</th>
    <th>Address</th>
    <th>Course</th>
    <th colspan="5">Action</th>
</tr>
<?php
include 'connection.php';
$query="SELECT * FROM student ";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result)){
    $rollno=$row['rollno'];
    $name= $row['name'];
    $address=$row['address'];
    $course=$row['course'];

    

echo "<tr>
<td>".$rollno."</td>
<td>".$name."</td>
<td>".$address."</td>
<td>".$course."</td>
<td>
  <a href='update.php?rollno=$rollno'> <button>Update</button></a>
  <a href='delete.php?rollno=$rollno'><button>Delete</button></a> 
</td>
</tr>";

}




?>




    </table>
</body>
</html>