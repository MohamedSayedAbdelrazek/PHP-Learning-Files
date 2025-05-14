<?php
/*
scandir($dir , sort[optional] SCANDIR_SORT_ASCENDING || SCANDIR_SORT_NONE || SCANDIR_SORT_DISCENDING, context[optional])
-to know what is in this directory
-return array with objects in this file
*/

$link=__DIR__."/Tests";
$files=scandir($link);

echo "<pre>";

print_r($files);

echo "</pre>";


foreach($files as $file)
{
    if(is_file($link ."/" .$file))
    {
        unlink($link ."/" .$file);
    }
}






/*
. ===> the dire i exist on
.. ==> the dire before i exist
*/