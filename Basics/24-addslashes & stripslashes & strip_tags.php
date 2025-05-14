<?php

/*
addslashes($string) 
some characters will make problem when its store in database
so , addslashes skip this character before storing in database

stripslashes($string)
remove all skipslashed before display the data to the user
*/  
$str="I will 'GO' at 6 O'clock" ;
echo $str."<br>";

$skipped=addslashes($str);
echo $skipped."<br>";

$clean=stripcslashes($str);
echo $clean."<br>";


/*
strip_tags($string , allow)

*/
$str2="I love <b>PHP</b> Go to <a href='php.net'>PHP.NET</a> to learn <i>PHP</i>";
echo $str2."<br>";

           //remove tags but allow to bold and italic
$stripped=strip_tags($str2 , "<b><i>");
echo $stripped."<br>";
