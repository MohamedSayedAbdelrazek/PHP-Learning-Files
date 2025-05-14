<?php
/*
str_replace(search , replace ,string , count 'number of replacement')
*/


$str="I Love PHP Too Much Because PHP Is Easy Language";
echo $str."<br>";

$str2=str_replace("PHP", "C++", $str , $c);

echo $str2."<br>";
echo" And Number Of Replacement Is ".$c."<br>";


echo "===============<br>";


$str2="I-Love=PHP|Too-Much-Because|PHP-Is Easy=Language";
echo $str2."<br>";
$str2=str_replace(array('-','=','|')," ",$str2);

echo $str2."<br>";

echo "===============<br>";


$str2="I-Love=PHP|Too-Much-Because|PHP-Is Easy=Language";

$str2=str_replace(array('-','=','|'),array('A','B','C'),$str2);
echo $str2."<br/>";

echo "===============<br>";

$str5="Line 1\nLine 2\nLine 3\n\rLine 5\r";
$order=array("\n","\n\r","\r");
$str5=str_replace($order," <br/>",$str5);
echo $str5;

