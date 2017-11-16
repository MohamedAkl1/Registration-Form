<?php
session_start();
require_once('database.php');
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$query="SELECT user_id FROM user WHERE e_mail='".$email."'";
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) != 0)
{
    echo "user already exists";
}
else{
    $_SESSION['username']=$username;
    $query="INSERT into user(username,e_mail,user_password) values ('$username','$email','$password')";
    $result=mysqli_query($conn,$query);

   // echo "registertion is completed succefully";
   if ($result === TRUE) {
        echo "New record created successfully";
        header("location:chooseDepartment.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

}


?>
