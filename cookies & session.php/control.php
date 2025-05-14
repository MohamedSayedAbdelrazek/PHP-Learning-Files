<?php
session_start();


if(isset($_SESSION['user'])) {
    echo "Welcome  ".$_SESSION['user']." , You Are Admin</br>  ";

    echo "<pre>";
    print_r($_SESSION);
    echo"</pre>";
  
}
else {
    echo "You Not Permitted To See This Page";
}