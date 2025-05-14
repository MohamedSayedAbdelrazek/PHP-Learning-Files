<?php
/*
retyrn true if exist ,false otherwise.

  in_array(needle , Haystack , type 
                             'By default false & and if true the item must be identecal')
*/
$arr=array("HTML","CSS","PHP","JS","C++","Python",10);

if( in_array("HTML",$arr,false))
	echo "yes is exist1 <br>";

if(in_array("10",$arr,true))
	echo "yes is exist5<br>";

/*
to get the index
array_search(needle,haystack,type)
*/


$lang=array_search("PHP",$arr,true);

echo "yes its found in index ".$lang."and its value is ".$arr[$lang]."<br>";

/*
arr_key_exists(needle , haystack)
*/
if(array_key_exists(2, $arr))
	echo "yes its exist";