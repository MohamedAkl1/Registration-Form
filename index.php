<?php
session_start();
require_once ('database.php');
if (isset($_POST['email'],$_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT username,dept_id FROM user WHERE e_mail='" . $email . "' AND user_password='" . $password . "' ";
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
    echo $conn->error;

    if (mysqli_num_rows($result) == 0) {
        echo "<div class='container'>";
        echo"<div class=\"alert alert-danger\">
 <strong>Wrong!</strong> check email and password
</div>";
       echo"</div>";
    } else {
            $_SESSION['username']=$row['username'];
            if($row['dept_id']== null){
                header('location:chooseDepartment.php');
            }else{
                header('location:coursesPage.php?id='.$row['dept_id']);
            }
    }
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign-up_page</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <script type="text/javascript">
              function validateForm(){
                  var username = document.getElementById("username").value;
                  var password = document.getElementById("password").value;
                  var email = document.getElementById("email").value;
                  if(username == null || username == ""){
                      alert("Enter your first name! ");
                      return false;
                  }
                  else if(password == null || password  == ""){
                      alert("Enter your password ");
                      return false;
                  }

                  else if (email == null || email == "")
                  {
                      alert("Enter your email! ");
                      return false;
                  }

                      else return true;
                  }
          </script>

  </head>
<body>
  <div class="container">
    <form action="signup.php" method="post" onsubmit="return validateForm()" id="form">

      <div class="form-group">
        <label for="exampleInputUsername">Username</label>
        <input type="text" class="form-control" name="username"  placeholder="Enter Username" id = "username" required>
      </div>




      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password"  placeholder="Password" id = "password" required>
      </div>





      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email"  placeholder="Enter email" id = "email" required>
      </div>



      <button type="submit" class="btn btn-primary btn-lg" value="Register">Submit</button>

    </form>
  </div>

  <form method="post" action="index.php" >
   <div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" name="email" id="signInUsername"  placeholder="Enter Username"  required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="signInPassword" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


</body>
</html>
