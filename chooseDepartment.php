<?php
session_start();
require_once('database.php');
$i=0;
echo "<h1>welcome"." ".$_SESSION['username']."<br></h1>";
echo "<h3>Please choose your department</h3>";
$query="SELECT * FROM department";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)){
    echo "<ul class=\"list-group\">";
   echo "<li class=\"list-group-item\"><a href='coursesPage.php?id=".$row['dept_id']."'".">".$row['dept_name']."</a></li>";
    echo "</ul>";
   echo "<br>";
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Choose Department</title>
  </head>
  <body>

  </body>
</html>
