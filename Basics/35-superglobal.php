<?php

// function fun() {

// $GLOBALS['name']="Mohamed";
// echo $GLOBALS['name'];
// }
// fun();
// echo $name;

$name='Osama';
function funfun() {
$name='Mohamed';
echo "Funciton Local Name is : ". $name."  <br/>";
echo "Function Global Name is : ".$GLOBALS['name'] ;
}
funfun();