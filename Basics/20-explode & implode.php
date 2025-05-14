<?php

/*
explode(separator , string , limit 'optional')
implode(separator , $arr) == join(separator , $arr)

//we have $arr and "string "
we can explode string to array 
and we can implode arr to string
*/

$str="I Love PHP TooMuch";

$arr=explode(" ", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";


$arr2=array("Mohamed","Ahmed","Aya","Alaa");
$str2=implode(" , ", $arr2);
echo "Hello Our Moderators Name Is : ". $str2;