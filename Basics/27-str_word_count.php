<?php

/*
str_word_count(string[required],
format 'by default 0'...will return number of words
 and if 1...will return indexed array 
if 2...will return associative array and their key=position first char in word, 
charlist)
*/

$str="I love php so much";
$str=ucwords($str);
echo $str."</br>";

$count=str_word_count($str);
$ind_array=str_word_count($str,1);
$aso_array=str_word_count($str,2);
echo $count."</br>";

echo "<pre>";
print_r($ind_array);
echo "</pre>";

echo "<pre>";
print_r($aso_array);
echo "</pre>";
