<?php
//list of timezone on php.net to set your timezone according to you country
date_default_timezone_set('Africa/Cairo');

/*
date(format , timestamp)
*/
$nextmonth=time()+(60*60*24*30);
echo date('jS')."<br>"; // j===> day of the month    ,  S===> suffex
echo date("Y-m-d h:i:s" , $nextmonth) ."<br>";

echo date('l jS \of F Y h:i:s a')."<br>";
$afterSixMonthes=time()+(6*30*24*60*60);


//https://www.w3schools.com/php/func_date_date.asp     ==> to know the function inside date
echo date('l \, jS \of F Y h:i:s a',$afterSixMonthes);
