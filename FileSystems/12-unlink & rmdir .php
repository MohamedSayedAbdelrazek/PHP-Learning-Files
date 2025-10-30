<?php
/*
unlink($file , context[optional])
unlink == remove 
but to remove the file ...the file must be writable


rmdir($directory)
to remove the directory ...must be empty
*/
$file=__DIR__ ."/Tests/new.txt";
if(file_exists($file) && is_writable($file))
{
    unlink($file);
    echo "File Removed";
}
else{
    if(!file_exists($file))
    {
        echo "Sorry , The File Isn't Exist";
    }
    else 
    {
        echo "Sorry , The File Isn't Writable";
    }
}