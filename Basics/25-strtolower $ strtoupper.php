<?php
/*
strtolower(string) //all string
strtoupper(string) //all string
lcfirst(string) // to make first char fromstring lower
ucfirst(string) // to make first char fromstring upper
ucwords(string) //first element from each word upper
*/
$str=" I love PHP so much";
echo $str."<br>";

$str=strtolower($str);
echo $str."<br>";

$str=ucwords($str);
echo $str;