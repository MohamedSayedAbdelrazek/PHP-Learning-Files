<?php
/*
 echo __FILE__."<br>";          what output? will output the path of the open file
 echo dirname(__FILE__);        what output? will output the path of the open Directory


dirname(__FILE__) || __DIR__ =====> to get the path of folder in open file
basename(__FILE__ ,"Extend" [optional]) ===> to get the file name with extend if you do not write it as an argument
*/ 
$dir=__DIR__ ;
$dir.="/inc/txt.php";
include "$dir";

 if(basename(__FILE__,'.php')=="4-dirname&basename") {
   $s=" 4-dirname&basename";
   $s=str_replace("4-","  ",$s);
  $s= str_replace("&"," & ",$s);
   echo "Your File Name Is ==>". $s;
 }
 else
 echo "hello";
