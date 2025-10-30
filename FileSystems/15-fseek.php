<?php

/*
fseek($handle , offset , whence)

whence  :
SEEK_SET =====> By Default (count the index from the begining)
SEEK_CUR =====>            (count the index from the current position of the cursor)
SEEK_END =====>            (count from the end of the file)

mohamed Sa@ed
fseek($fileHandle , 9); == fseek($fileHandle , -3 , SEEK_END);
fwrite($fileHandle ,'y');



*/

$fileHandle=fopen('osama.txt','r+');
//Os1ma El2zero        
fseek($fileHandle, 2 , SEEK_SET);//move the cursor to index 2
fwrite($fileHandle, 'a');

fseek($fileHandle, 8 , SEEK_SET);   //==fseek($fileHandle , 6 , SEEK_CUR)
fwrite($fileHandle, 'z');

fclose($fileHandle);   //to close the open file
