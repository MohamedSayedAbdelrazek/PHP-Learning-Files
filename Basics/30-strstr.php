<?php
/*
strstr(haystack , needle , optional_search)
stristr(haystack , needle , optional_search)
*/
$str="I Love PHP So Much Because PHP Is Cool";

$char=strstr($str , "PHP");
echo $char."</br>";

$char2=strstr($str,"PHP", true);
echo $char2."<br/>";

$str2="mohamedsayed051213@gmail.com";
$charr=strstr($str2,'@');

$charr=str_replace('@', "",$charr);
echo $charr;