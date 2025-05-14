<?php
//session==> store the information in variables on the server
//cookies==>store the information in your device
session_start();
$_SESSION['username']="Mohamed";
$_SESSION['ID']=1001;
$_SESSION['favfod']="pizza";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
<a href="page2.php">Page number 2</a>