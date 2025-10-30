<?php

echo"<pre>";
print_r(glob("*.*")); //اطبعلي جميع الملفات بحميع الامتدادات
echo "</pre>";


echo"<pre>";
print_r(glob("mohamed/*.*"));  //اطبعلي جميع الملفات الي جوه الباث ده
echo "</pre>";

foreach(glob('mohamed/*.{php,rtf}', GLOB_BRACE)as $file) {
    echo $file."<br>";
}
?>