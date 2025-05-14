<?php
/*
uniqid()====> uniqe Identifier
uniqid(prefix , more_entropy)
*/ 

$random=uniqid();

var_dump($random);
echo "</br>";
$random2=uniqid('script1_'); //to avoid similar id when two script are run in the same time
$random3=uniqid('',TRUE);

var_dump($random2); 
echo "<br>";
var_dump($random3);