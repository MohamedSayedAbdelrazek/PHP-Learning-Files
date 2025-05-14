<?php

session_start();

echo "Hello , ".$_SESSION['username']." Your ID is : ".$_SESSION['ID'];

?>

<a href="logout.php">Log Out</a>