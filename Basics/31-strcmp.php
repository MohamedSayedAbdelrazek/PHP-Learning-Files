<?php
/*
strcmp(string 1 , string 2)
 0 => the two strings Are Equal
 >0 => the first string larger than the second with this value
 <0 => the first string smaller than the second with this value

strncmp(string 1 , string 2 , length)
compare some character


strrev(string) => to reverse the string
*/
$str1="PH";
$str2="PHP";
echo strncmp($str1,$str2,3);