<?php
/*
array_reverse($array , preserve  "if true keep the key as the same ")

shufflue($array) // merge the element every reload
*/
$langs=array("HTML" , "HTML5" , "CSS" , "JS" , "PHP");


echo "<pre>";
print_r($langs);
echo "<pre>";


$reversed=array_reverse($langs);

echo "<pre>";
print_r($reversed);
echo "<pre>";



shuffle($langs);

echo "<pre>";
print_r($langs);
echo "<pre>";