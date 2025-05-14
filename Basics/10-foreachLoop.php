<?php
/*
syntax [1] for indexed arrays 

foreach($array as $value) {


	//code to excute

}
syntax [2] for Associative arrays 

foreach($array as $key =>$value) {


	//code to excute

	
}
*/
$countries=array("Egypt","Saudi Arabia","palestine","Qatar","sudan","syria");
foreach($countries as $value)
	echo $value."<br>";

$ccountries=array(
	"Eg"=>"Egypt",
	"SA"=>"Sudi Arabia",
	"Qa"=>"Qatar",
	"Pa"=>"Palestine",
	"Su"=>"Sudan",
	"Sy"=>"syria"
);
foreach($ccountries as $key =>$value)
	echo $key." => ".$value."<br>";