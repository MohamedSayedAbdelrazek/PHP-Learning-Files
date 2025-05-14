<?php
/*
trim=(string , charlist) //remove from left and right
rtrim(string , charlist)//remove from right
ltrim(string , charlist)//remove from left

\0   => NULL
\t   => tab
\n   => newLine
\r   => carriage return 
\x0b => vertical tab
" "  => space
*/
$str="I Love PHP";
echo var_dump($str)."</br>";

$str="   I Love PHP    ";
echo var_dump($str)."</br>";

$str=trim($str);
echo var_dump($str)."<br>";

$trimmed=trim($str,"I LHP");
echo $trimmed;