<?php
/*

setcookie(name[required] , value , expire , path , domain , secure , httponly)
*/
setcookie("style[color]","red" , time()+60*60*24*30 , "/");
setcookie("style[font]","tahoma" , time()+60*60*24*30 , "/");
setcookie("style[layout]","boxed" , time()+60*60*24*30 , "/");

//    '/'  its mean to enable cookie in whole domain'localhost'

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";


if(isset($_COOKIE['style']))
{
	echo $_COOKIE['style']['color'];
}