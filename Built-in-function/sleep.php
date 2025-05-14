<?php
/*
sleep(seconds)
usleep(microSeconds)
time_sleep_until(time()+seconds)

*/

// to Recheck After some seconds ||
// to reRequest From Google After Some Seconds To Avoid Block

function checkFile() {
    if(file_exists('mohamed.txt')) {
        echo "Good , The File Is Found";
    }
    else {
        sleep(5);
         checkFile();
    }
}
checkFile();