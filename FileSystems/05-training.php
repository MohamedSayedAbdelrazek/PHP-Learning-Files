<?php
/*
[ 1 ]  ========> Check If The Directory Is Exists Or No
[ 2 ]  ========> Make The Directory
[ 3 ]  ========> Assign This Directory To Variable
[ 4 ]  ========> Create A File Inside This Directory
[ 5 ]  ========> Assign This File To Variable
[ 6 ]  ========> Change Mode Of This File To Be Read Only 
[ 7 ]  ========> Check If This File Is Writable
[ 8 ]  ========> Change Mode Of This File And Make It Writable
[ 9 ]  ========> Include This File                               

*/ 

if(!is_dir("mohamed"))
{
   mkdir("mohamed");
}
$dir=__DIR__ ."/mohamed";

file_put_contents($dir."/test.php","<?php echo 'HELLO HELLO';");
$file=$dir."/test.php";

chmod($file, 0444);

if(!is_writable($file))
{
chmod($file, 0777);
}
include($file);