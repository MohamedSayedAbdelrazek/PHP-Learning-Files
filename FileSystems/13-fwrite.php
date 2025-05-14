<?php

/*
fopen(filename , mode , include_path , context)
fread(Handle , length)
fwrite(Handle , string , length)
modes:

r : Read Only Starting From Begining Of The File [File Must Be Exist]
r+ :Read & Write Starting From Begining Of The File [File Must Be Exist]

w : Write Only Starting From Begining Of The File [Open & Clear Content][Create The File If Not Exist]
w+ : Write Only Starting From Begining Of The File [Open & Clear Content] [Create The File If Not Exist ]

a: Write Only [Open & Write From The End Od The File] [Create The File If Not Exist ]
a+: Read & Write [Open & Write From The End Of The File] [Create The File If Not Exist]

x:Write Only [Create a new file ==> if the file already exist will give an error]
x+:Read & Write  [Create a new file ==> if the file already exist will give an error]
*/
$fileHandle=fopen('osama.txt', 'r+');

$read=fread($fileHandle, filesize('osama.txt'));
echo $read;

$write=fwrite($fileHandle, 'This Is The New Text');
echo $write;