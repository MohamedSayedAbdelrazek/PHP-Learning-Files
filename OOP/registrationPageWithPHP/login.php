<?php
require_once('function.php');

if(isset($_SESSION['id'])):
    header('location:index.php');
endif;
$login=new Login();

if(isset($_POST['submit'])):
    $result=$login->login($_POST['usernameemail'],$_POST['password']);

    if($result==1):
        $_SESSION['login']=TRUE;
        $_SESSION['id']=$login->idUser();
        header('location:index.php');
    endif;

    if($result==10):
        echo "<script>alert('Password Is WRONG')</script>";
    endif;

    if($result==100):
        echo "<script>alert('User Not Registerd')</script>";
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
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <div>
            <label for="usernameemail">Username OR Email : </label>
            <input type="text" name="usernameemail" id="usernameemail" required class="form-control">
        </div>

        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required class="form-control">
        </div>
</br>
        <div>
            <input type="submit" value="login" name="submit" class="btn btn-secondary">
        </div>
    </form>
</br>
<p>Not Login?<a href="registration.php">Register.</a> </p>
</body>
</html>