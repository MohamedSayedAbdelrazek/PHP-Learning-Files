<?php
/*
array_sum($arrayName)
*/
$arr=array("MO",20,30,50,100);

echo array_sum($arr)."</br>";

echo "====================================================<br>";



/*
        array_rand($arrayName,number of element you want)
to get some element from array by luck
*/
$arr2=array("Mohamed","Aya","Mahmoud","Osama","Alaa");

$randomKey=array_rand($arr2,2);   //store in randomKey the indexes 

echo $arr2[$randomKey[0]]."<br/>";

echo $arr2[$randomKey[1]]."<br/>";
echo "====================================================<br>";



/*
        array_unique($arrayName,sortingType)
 to Delete all duplicate options

*/

 $arr3=array("Mohamed","Aya","Mohamed","Alaa","Aya","Mohamed");

 $uniqeArray=array_unique($arr3);

 echo "<pre>";
 print_r($uniqeArray);
 echo "</pre>";

