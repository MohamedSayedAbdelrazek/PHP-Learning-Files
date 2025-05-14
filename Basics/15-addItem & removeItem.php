<?php

$langs=array("HTML",
	         "HTML5",
	         "CSS",
	         "PHP",
	         "C++",

);
echo "<pre>";
print_r($langs);
echo "</pre>";


array_push($langs, "mySQL" , "Python" );  //add elements to the end of array
                                          //at least one element can be added

echo "<pre>";
print_r($langs);
echo "</pre>";

array_unshift($langs, "mo","sayed");//add elements to the start of array
                                          //at least one element can be added

echo "<pre>";
print_r($langs);
echo "</pre>";

/*
array_pop($arrayname) : to remove last element in the array
array_shift($arrayname) : to remove first element in the array
*/
echo array_pop($langs);

array_shift($langs);

echo "<pre>";
print_r($langs);
echo "</pre>";


