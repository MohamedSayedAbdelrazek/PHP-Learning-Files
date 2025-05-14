<?php
/*
parse_str($string , $array)
//تحليل للينك

nl2br => new line to <br>
*/
function codepar($link)
{
parse_str($link,$myarray);
echo "<pre>";
print_r($myarray);
echo "</pre>";
}
$link="Name=mohamed&Age=19&Year=2024&skill=1&exp=2";
codepar($link);

$str="Hello\n I love PHP \n also \n c++";
echo nl2br($str);