<?php
/*
	array_fill(index , number , value)
*/
	//i need ten elements , start with index 2 ,each element his value is mohamed
	$arr=array_fill(2, 10, "mohamed");

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	$arr2=array_fill(2, 5, array("mohamed","Ahmed","sayed"));
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";

	$arr3=array_fill(1,20,array_fill(1,5,array("ahmed","mahmoud")));
echo "<pre>";
	print_r($arr3);
	echo "</pre>";
