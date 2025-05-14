<?php
/*
file_put_content( file , data , mode , context)

mode :
FILE_APPEND ====> do not remove previous content but add to it after every reload
LOCK_EX     ====> no one can write in this file with me in the same time
*/ 
 /*                    ==========not now====
 file_get_context(path, include path , context , offset ,max_length )
 */
file_put_contents("osama.txt", "this file created by php\n" , FILE_APPEND | LOCK_EX);



echo file_get_contents("osama.txt" , false , NULL , 5 , 12);


