<?php

$input=$_POST['test'];

$opt=array(
    'options'=>array( 'min_range'=>1,'max_range'=>999 ),
      'flags'=>FILTER_FLAG_ALLOW_HEX
);

echo filter_var($input , FILTER_SANITIZE_STRING );

if( filter_var($input , FILTER_VALIDATE_INT , $opt)==TRUE) {
    echo " </br>Good The ".$input." You Entered Is from 1-999";
}
else {
    echo " </br> The ".$input." Must Be Between 1-999";
}
// filter_var($VARIABLE , FILTER_VALIDATE_EMAIL);
// filter_var($VARIABLE , FILTER_VALIDATE_IP);
// filter_var($VARIABLE , FILTER_VALIDATE_URL);
// filter_var($VARIABLE , FILTER_VALIDATE_FLOAT);

                                //تعقيم 
// echo filter_var($string , FILTER_SANITIZE_STRING);
// <h1>mohamed</h1> ============> mohamed