<?php
session_start();
require_once('database.php');
$i=0;
require_once('config.php');
echo "welcome"." ".$_SESSION['username']."<br>";
$query="SELECT * FROM departments";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)){
    echo "<ul class=\"list-group\">";
   echo "<li><a href='coursesPage.php?id=".$row['department_id']."'".">".$row['department_name']."</a></li>";
    echo "</ul>";
   echo "<br>";
}
 ?>
