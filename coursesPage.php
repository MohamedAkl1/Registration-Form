<?php
session_start();
require_once('database.php');

$username=$_SESSION['username'];
echo "<p class='text-primary'>"."welcome"." ".$_SESSION['username']."</p>";
require_once('database.php');

$id=$_GET['id'];
$query = "UPDATE user SET dept_id='".$id."' WHERE username='".$username."'";
$result=mysqli_query($conn,$query);
if ($result === TRUE) {
   echo "student enrolled sucessfully";

}

$query="SELECT * FROM course WHERE dept_id='".$id."'";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
    echo "<div id='container'>";
    echo "<ul class=\"list-group\">";

    echo "<li class=\"list-group-item list-group-item-success\">Course name: ".$row['course_name']."</li>";

    echo "<li class=\"list-group-item list-group-item-info\">Description: ".$row['course_describtion']."</li>";

    echo "<li class=\"list-group-item list-group-item-warning\">Instructor:".$row['instructor_name']."</li>";

    echo "<li class=\"list-group-item list-group-item-danger\">Credit hours: ".$row['credit_hours']."</li>";

    echo "<ul>";
    echo "</div>";

}
 ?>
