<?php
/*
strpos(haystack ,needle ,offset 'start search from') 
case sensetive

stripos(haystack ,needle ,offset 'start search from') 
case insensetive

strrpos(haystack ,needle ,offset 'start search from') 
search from right

strripos(haystack ,needle ,offset 'start search from') 
*/
$str="I Love PHP So Much Because PHP Is Famous Language";
$pos=strripos($str,"php");

echo $pos;