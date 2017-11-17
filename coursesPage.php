<?php
session_start();
require_once('database.php');

$username=$_SESSION['username'];
echo "<h1 class='jumbotron'>"."welcome"." ".$_SESSION['username']."</h1>";
require_once('database.php');

$id=$_GET['id'];
$query = "UPDATE user SET dept_id='".$id."' WHERE username='".$username."'";
$result=mysqli_query($conn,$query);
if ($result === TRUE) {
   echo "<h2>student enrolled sucessfully</h2>";

}

$query="SELECT * FROM course WHERE dept_id='".$id."'";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
    echo "<div id='container'>";
    echo "<ul class=\"list-group\">";

    echo "<li class=\"list-group-item active\">Course name: ".$row['course_name']."</li>";

    echo "<li class=\"list-group-item \">Description: ".$row['course_describtion']."</li>";

    echo "<li class=\"list-group-item \">Instructor:".$row['instructor_name']."</li>";

    echo "<li class=\"list-group-item \">Credit hours: ".$row['credit_hours']."</li>";

    echo "<ul>";
    echo "</div>";

}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Courses</title>
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
   </head>
   <body>

   </body>
 </html>
