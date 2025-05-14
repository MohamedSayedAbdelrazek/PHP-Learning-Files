<?php
/*
substr(string [required] , start from index[required] , length+1[optional])
substr_count(string , substring , start , length 'walk how many from the start? ')
*/
$str="I love php so much because php is cool and famous";
$str=ucwords($str);


$peice=substr($str , 19, 12);
$peicee=substr($str,stripos($str, "because"),12);
$peice2=substr($str,-6,7);
$peice3=substr($str,-6,-3 );//remove last three char);

echo "$peice</br>";
echo "$peicee</br>";

echo "$peice2</br>";
echo "$peice3</br>";

$count=substr_count($str, "Php" ,0 , strlen($str));
echo $count."</br>";

