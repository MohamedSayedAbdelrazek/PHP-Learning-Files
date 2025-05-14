<?php  
/*
       //Indexed array
 sort($array , sortingType)
 rsort($arr,sortingType)
*/


$langs=array("HTML","HTML5","CSS","C++","PHP");
echo "<pre>";
print_r($langs);
echo "<pre>";

sort($langs);

echo "<pre>";
print_r($langs);
echo "<pre>";




 /*
       //Associative array
 asort($array , sortingType)  //sorting "value" in associative array from < to >
 arsort($arr,sortingType)     //sorting "value"in associative array from > to <

 ksort($array,sortingType)    //sorting "key" in associative array from < to >
 krsort($array , sortingType) //sorting "key" in associative array from > to <
*/

$langs2=array("HTML "=>95,
			  "HTML5"=>5,
			  "CSS"=>50,
			  "C++"=>100,
			  "PHP"=>75);
echo "<pre>";
print_r($langs2);
echo "<pre>";

asort($langs2);

echo "<pre>";
print_r($langs2);
echo "<pre>";

