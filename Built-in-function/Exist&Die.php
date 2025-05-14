<?php
/*
exit() && die() =====> to terminate the script

*/
$file="mohamed.txt";
if(file_exists($file))
{
    fopen($file,'r');
}
else
{
    exit("The File ".$file ." Is Not Found");
}

echo "Bla Bla Blaaaa";