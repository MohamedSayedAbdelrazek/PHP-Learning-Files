<?php
require_once('function.php');

$register=new Register();
if(isset($_SESSION['id'])):
    header('location:index.php');
endif;

if(isset($_POST['submit'])):
    $name=mysqli_escape_string($register->conn,$_POST['name']);
    $username=mysqli_escape_string($register->conn,$_POST['username']);
    $email = mysqli_escape_string($register->conn, $_POST['email']); 
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
   $result= $register->Registration($name,$username,$email,$password,$confirmpassword);

   if($result==1):
   echo "<script> alert('Registration Successfull.')</script>";
   endif;

   if($result==10):
    echo "<script> alert('Username Or Email Has Already Taken.')</script>";
   endif;

   if($result==100):
    echo "<script> alert('Pasword does not match.')</script>";
   endif;

endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    <h2>Registration<br></h2>
   <?php
   if(isset($_SESSION['register'])):
    echo $_SESSION['register'];
    unset($_SESSION['register']);
   endif;
   ?>
    <form action="" method="POST">
        <div>
        <label for="name">Name : </label>
        <input class="form-control" type="text" name="name" id="name" required>
        </div>
      
        <div>
        <label for="username">username : </label>
        <input class="form-control"  type="text" name="username" id="username" required>
        </div>

        <div>
        <label for="email">email : </label>
        <input class="form-control" type="email" name="email" id="email" required>
        </div>

        <div>
        <label for="password">Password : </label>
        <input class="form-control" type="password" name="password" id="password" required>
        </div>

        <div>
        <label for="confirmpassword">Confirm Password : </label>
        <input class="form-control" type="password" name="confirmpassword" id="confirmpassword" required>
        </div>
</br>
        <div>
            <input type="submit" value="Register" class="btn btn-primary" name="submit">
        </div>
    </form>
</br>
<a href="login.php">Login</a>
</body>
</html>