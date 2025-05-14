<?php
// [ @ ] error control operator :::to ignore the error 

// $file=fopen("test.php", "r"); is this file is exist

$file=fopen("mo.tst", "r") or die("File Not Exist"); 
                             //if wrong display this