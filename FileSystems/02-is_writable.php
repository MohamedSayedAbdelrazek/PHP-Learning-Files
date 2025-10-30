<?php
$file="Aya.txt";
if(is_writable($file)) {
    echo "Good The File [ ".$file." ] Is Writable";
    file_put_contents($file,"The File Is Writable");
}
else {
    echo "Sorry The File [ ".$file." ] Is Not Writable So I Can\'t Add Content To It";
    file_put_contents($file,"Created By PHP");
}