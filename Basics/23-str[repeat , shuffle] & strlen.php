<?php
/*
str_repeat(string[required] , number of repeats[required])
str_shuffle($string)
strlen($string)
*/
$str="Mohamed";
$repeat=str_repeat($str, 20);
echo $repeat."<br>";


$shuffle=str_shuffle($str);
echo $shuffle."<br>";

$length=strlen($str);
echo $length."<br>";


