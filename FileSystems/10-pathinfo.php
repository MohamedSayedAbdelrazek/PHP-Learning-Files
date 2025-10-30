<?php
/*

pathinfo(path , option [optional])
return an associative array with four index "dirname & basename & extension & filename"
*/

echo "<pre>";

print_r(pathinfo(__FILE__));

echo "</pre>";