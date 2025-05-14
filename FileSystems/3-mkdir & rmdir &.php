<?php
/*
directory == Folder
mkdir ==> make directory
rmdir ==> remove directory
is_dir ==>
 */

 $name="Mohamed";
 echo dirname(__FILE__);

 if(is_dir($name))
 {
 echo "The Directory ". $name." Is exists , No Need To Create It <br>" ;
 file_put_contents("Mohamed/hello.txt" , "hello hello");
 }

 else
 {
     mkdir($name);
     echo "The Directory Name ".$name." Is Created";
      file_put_contents("/Mohamed/hello.txt" , "hello hello");

 }
