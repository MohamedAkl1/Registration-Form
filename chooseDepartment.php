<?php
session_start();
require_once('database.php');
$i=0;
echo "welcome"." ".$_SESSION['username']."<br>";
$query="SELECT * FROM department";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)){
    echo "<ul class=\"list-group\">";
   echo "<li><a href='coursesPage.php?id=".$row['dept_id']."'".">".$row['dept_name']."</a></li>";
    echo "</ul>";
   echo "<br>";
}
 ?>
