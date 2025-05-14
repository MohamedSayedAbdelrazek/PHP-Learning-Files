<?php
$admins=["Mohamed" , "Yoyo" , "Ahmed" ,"Alaa"];
$username=$_POST['username'];

if(in_array($username,$admins)) {
    echo "Welcome ".$username." To control Panel For Admins </br>";
}
else
echo "Sorry , This Yousername Is Not Exist In Our Client Area</br>";