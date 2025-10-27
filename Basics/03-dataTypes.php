<?php
//=====================String==========================
$var1="I Love PHP";
$var2=100;
$var3=TRUE;
$var4=10.5;    //double OR float //all the same
$var5=array(
"A"=>"val1",
"B"=>"val2",
"C"=>"val3"
);
$var19=["key1"=>"value1","key2"=>"value2"];
$var6=NULL;
echo "<h2>get type</h2>";
echo gettype($var1)."<br/>";
echo gettype($var2)."<br/>";
echo gettype($var3)."<br/>";
echo gettype($var4)."<br/>";
echo gettype($var5)."<br/>";
echo gettype($var6)."<br/>";
//data type[7] object
//data type[8] resource 

echo "<h2>variable dump</h2>";
var_dump($var1);echo" <br/>";
var_dump($var2);echo "<br/>";
var_dump($var3);echo "<br/>";
var_dump($var4);echo "<br/>";
var_dump($var5);echo "<br/>";
var_dump($var6);echo "<br/>";
//=========================================================

