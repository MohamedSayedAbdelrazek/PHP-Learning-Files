<?php
session_start();
$admins=["Mohamed","Yoyo","Osama","Ahmed" , "Alaa"];

//to sure that the user came from login page and do not access this page directly
if($_SERVER['REQUEST_METHOD']=='POST') { 
    $user= $_POST['username'];

    if(in_array($user,$admins))  //If is admin
    {
      $_SESSION['user']=$user;
      echo "Welcome ". $_SESSION['user']." , You will Be Redirected To Control Panel Area </br>";
     header('REFRESH:5;URL=control.php') ;

    }
    else { //if Not Admin
        echo "Sorry , You are not admin And You Are Not Permitted To See Control Panel";
    }
}
else {
    echo "Error , You Cannot Browse This Page Directly";
}