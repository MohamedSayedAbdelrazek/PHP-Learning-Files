<?php
/*
str_split(string , length "optional and by default=1")
chunk_split(string , length[by default 76] , end)
*/
$str="Hello I love PHP";

$arr=str_split($str,2);
echo "<pre>";
print_r($arr);
echo "<pre>";

$str=chunk_split($str , 2 , '-');
echo $str;
