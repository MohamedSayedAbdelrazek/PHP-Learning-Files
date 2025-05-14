<?php
require_once('function.php');
$select=new Select();

if(isset($_SESSION['id'])):
    $user=$select->selectUserById($_SESSION['id']);

else:
    header('location:login.php');
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome <span> <?php echo $user['name'];?></span></h2>
    <a href="logout.php">Logout</a>
</body>
</html>